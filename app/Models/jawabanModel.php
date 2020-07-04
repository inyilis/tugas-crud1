<?php  
	//Model
	namespace App\Models;
	use Illuminate\Support\Facades\DB;

	class jawabanModel{
		public static function get_all(){
			$jawaban = DB::table('jawaban')->get();
			return $jawaban;
		}

		public static function save($data){
			$new_jawaban = DB::table('jawaban')->insert($data);
			return $new_jawaban;
		}

		public static function find_by_id($id){
			$jawaban = DB::table('jawaban')->where('id_pertanyaan', $id)->get();
			return $jawaban;
		}

		public static function destroy($id){
			$delete = DB::table('jawaban')->where('id_pertanyaan', $id)->delete();
			return $delete;
		}
	}

?>