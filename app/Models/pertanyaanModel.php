<?php  
	//Model
	namespace App\Models;
	use Illuminate\Support\Facades\DB;

	class pertanyaanModel{
		public static function get_all(){
			$pertanyaan = DB::table('pertanyaan')->get();
			return $pertanyaan;
		}

		public static function save($data){
			$new_pertanyaan = DB::table('pertanyaan')->insert($data);
			return $new_pertanyaan;
		}

		public static function find_by_id($id){
			$pertanyaan = DB::table('pertanyaan')->where('id', $id)->first();
			return $pertanyaan;
		}

		public static function update($id, $req){
			$pertanyaan = DB::table('pertanyaan')
							->where('id', $id)
							->update([
								'judul' => $req["judul"],
								'isi' => $req["isi"],
								'tgl_dibuat' => $req["tgl_dibuat"],
								'tgl_diupdate' => $req["tgl_diupdate"],
							]);
			return $pertanyaan;
		}

		public static function destroy($id){
			$delete = DB::table('pertanyaan')->where('id', $id)->delete();
			return $delete;
		}
	}

?>