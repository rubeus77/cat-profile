//uzupełnienie tabeli z breeds(rasy) wstępne. takie początkowe dane

class BreedsTableSeeder extends Seeder{
    public function run(){
        DB::table('breeds')->insert(array(
            array('id'->1, 'name'->"domowy"),
            array('id'->2, 'name'->"perski"),
            array('id'->3, 'name'->"syjamski"),
            array('id'->4, 'name'->"abisyński")
        ));
    }
}