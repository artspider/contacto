use Laracasts\Presenter\Presenter;

class OrderPresenter extends Presenter {

  private $weekMap = [
      0 => 'DOM ',
      1 => 'LUN',
      2 => 'MAR',
      3 => 'MIE',
      4 => 'JUE',
      5 => 'VIE',
      6 => 'SAB',
    ];

  public function dayName(){
    $order_date = Carbon::parse(this->fecha_entrega);
    $dayOfTheWeek = $order_date->dayOfWeek;
    $weekday = $weekMap[$dayOfTheWeek];
    return $weekday;
  }

  public function month3Letters(){

  }

}
