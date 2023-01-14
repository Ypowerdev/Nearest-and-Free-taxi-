<?php 

class Cars 
{ 
   public int $clientLocation;  
   
   public array $cars = [];
    
   public function __construct(int $taxiAmount) 
   {
       $this->clientLocation = rand(0,1000); //new
       $this->cars = $this->getCarsArray($taxiAmount);
       $this->printTaxiForClient();
   }
    
    public function getCarsArray(int $taxiAmount): array
    {
        $cars = [];
        for($loop = 1; $loop <= $taxiAmount; $loop++) {
            $cars[] = [
                    'name' => 'Taxi ' . $loop, 
                    'position' => rand (0,1000), 
                    'isFree' => (bool) rand (0,1)
                ];  
        }
        
        return $cars; 
    }   
       
    public function getFreeTaxiName(): string 
    {   
        foreach ($this->cars as $car) { 
        $distance = abs($car['position'] - $this->clientLocation); 
            if ($car['isFree'] = true)
            {
                if(!isset($distance_min) || $distance < $distance_min) 
                {
                    $distance_min = $distance;
                    $taxiName = $car['name']; 
                }
            }     
        }

        return $taxiName;
    }  
    
    public function printTaxiForClient(): void
    {
        foreach ($this->cars as $car) {
            echo 'Наименование такси: ' . $car['name'];
            echo ($car['name'] == $this->getFreeTaxiName()) ? ' Едет это такси' : '';
            echo "\n";
            
            echo 'Позиция такси: ' . $car['position'] . 'км' . "\n";
            echo 'Позиция клиента: ' . $this->clientLocation . 'км' . "\n";
            
            echo 'Дистанция до клиента:';
            echo abs($car['position']) - $this->clientLocation . 'км';
            
            echo "\n";
            echo 'Статус: ';
            echo ($car['isFree'] = true) ? 'Свободно' : 'Занято';
            
            echo "\n\n";
        }
    }
}

new Cars(9); 
