use Laracasts\Presenter\Presenter;

class ExpertPresenter extends Presenter {

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
    $dayOfTheWeek = this->fecha_entrega->dayOfWeek;
    $weekday = $weekMap[$dayOfTheWeek];
    return $weekday;
  }

  public function month3Letters(){

  }

}
