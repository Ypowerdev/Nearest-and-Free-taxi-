<?php 

<?php 

class Cars 
{ 
    public $cars = [];  
    public $client;  

   public function __construct(array $cars, $client) 
   {
       $this->cars = $cars; 
       $this->client = $client;     
   }
    
    public function getFreeTaxi () {   
        foreach ($this->cars as $car){ 
        $distance = abs($car['position'] - $this->client); 
            if ($car['isFree'] = true)
            {
                if(!isset($distance_min) || $distance < $distance_min) 
                {
                    $distance_min = $distance;
                    $result = $car['name']; 
                }
            }     
        }
        return $result; 
    }  
}

$cars  = [ 
    ['name' => 'Taxi 1', 'position' => rand (0,1000), 'isFree' => (bool) rand (0,1)], 
    ['name' => 'Taxi 2', 'position' => rand (0,1000), 'isFree' => (bool) rand (0,1)],
    ['name' => 'Taxi 3', 'position' => rand (0,1000), 'isFree' => (bool) rand (0,1)],
    ['name' => 'Taxi 4', 'position' => rand (0,1000), 'isFree' => (bool) rand (0,1)],
    ['name' => 'Taxi 5', 'position' => rand (0,1000), 'isFree' => (bool) rand (0,1)],
    ]; 

$client = rand(0,1000); 

$freetaxi = new Cars($cars,$client); 
$freetaxi->getFreeTaxi();  

?> 

<?php foreach ($freetaxi->cars as $car): ?>
<li> 
Наименование такси: <?php echo $car['name'] ?> <?php echo $car['name'] === $freetaxi->getFreeTaxi($freetaxi->cars) ? 'Едет это такси' : '';?> <br>
Позиция такси: <?php echo $car['position'];?> км <br>
Позиция клиента: <?php echo $freetaxi->client;?> км <br>
Дистанция до клиента: <?php echo abs($car['position'] - $freetaxi->client);?> км <br>
Статус: <?php echo $car['isFree'] = true ? 'Свободно' : 'Занято'; ?> 
</li> 
<?php endforeach; ?> 

</ul> 
