class Breed extends Eloquent {
    public $timestamps = false;
    public function cats(){
        return $this->hasMany('Cat'); //breed(rasa) może posiadać wiele kotów tą samą rasę
    }
}