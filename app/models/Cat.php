/* tworzymy klasę a zarazem strukturę tabeli "cats" w bazie danych, która jest rozszerzeniem klasy Eloquent */ 

class Cat extends Eloquent {
    protected $fillable=array('name', 'date_of_birth','breed_id');
    public function breed(){
        return $this->belongsTo('Breed'); //dany kot posiada jedną rasę
    }
}
