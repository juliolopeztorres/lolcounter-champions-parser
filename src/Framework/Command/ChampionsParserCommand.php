<?php

namespace App\Framework\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;

use App\Domain\GetChampionsId\GetChampionsIdUseCase;
use App\Domain\GetChampionById\GetChampionByIdUseCase;
use App\Data\Service\Serializer;
use App\Data\Service\DataWriter;

class ChampionsParserCommand extends Command
{
    const OUTPUT_PATH = __DIR__ . "/../../../public/output/";
    const OUTPUT_NAME = 'champions-%s.json';

    const LANGUAGE_CODE = ['es_ES', 'en_US', 'pt_BR', 'tr_TR'];

    protected static $defaultName = 'app:champions-parse';

    private $outputInterface;

    private $getChampionsIdUseCase;
    private $getChampionByIdUseCase;
    private $serializer;
    private $dataWriter;

    public function __construct(
      GetChampionsIdUseCase $getChampionsIdUseCase,
      GetChampionByIdUseCase $getChampionByIdUseCase,
      Serializer $serializer,
      DataWriter $dataWriter
      ) {
        $this->getChampionsIdUseCase = $getChampionsIdUseCase;
        $this->getChampionByIdUseCase = $getChampionByIdUseCase;
        $this->serializer = $serializer;
        $this->dataWriter = $dataWriter;

        parent::__construct();
    }

    protected function configure()
    {
        $this
        ->setDescription('Parsers all new champions data collected in Riot servers')
        ->setHelp('Parsers all new champions data collected in Riot servers by connecting through ' . PHP_EOL .
        'a web client to their API, collect the response, parse and store in a JSON file format.');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $this->outputInterface = $output;

        $this->writeln("Requesting champions ids...");

        $championsIdArray = $this->getChampionsIdUseCase->get();
        // $championsIdArray = [0 => "Khazix"];

        $this->writeln("Champions ids received. Count: " . count($championsIdArray));

        foreach (self::LANGUAGE_CODE as $languageCode) {
            $this->writeln("Getting information for language code {$languageCode}");

            $this->saveToFile(
              $this->serializeChampions(
                $this->getChampionsData($championsIdArray, $languageCode)
              ),
              self::OUTPUT_PATH,
              sprintf(self::OUTPUT_NAME, explode('_', $languageCode)[0])
            );

            $this->writeln("Process for language code {$languageCode} finished. Check output file!");
            // break;
        }
    }

    private function getChampionsData(array $championsIdArray, string $languageCode)
    {
        $championsDataArray = [];
        foreach ($championsIdArray as $key => $id) {
            $this->writeln("- {$key}: {$id}");
            $this->writeln("Getting champion info...");

            $champion = $this->getChampionByIdUseCase->get($id, $languageCode);
            $championsDataArray[] = $champion;

            $this->writeln("Information for {$id} was " . ($champion === null ? "FAIL" : "OK"));

            //break;
        }
        $this->writeln("Finished. Count " . count($championsDataArray));

        return $championsDataArray;
    }

    private function saveToFile(string $data, string $path, string $name)
    {
        $this->writeln("Saving all data to " . $path . $name);
        $this->dataWriter->write($data, $path, $name);
    }

    private function serializeChampions($champions)
    {
        $this->writeln("Serializing champions data...");

        return $this->serializer->get()->serialize(
          ['data' => $champions, 'type' => 'champion', 'version' => '9.2.1'],
          'json',
          ['json_encode_options' => JSON_UNESCAPED_UNICODE]
        );
    }

    private function writeln($data)
    {
        $this->outputInterface->writeln($data);
    }
}
