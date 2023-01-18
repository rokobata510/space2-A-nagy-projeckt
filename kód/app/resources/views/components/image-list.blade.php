<?php
    use Illuminate\Support\Facades\DB;
    $users = DB::table('images')->get();
?>
<?php
    //sql connection adatok
$servername = "localhost";
$username = "root";
$password = "";
$database = "laravel";

$conn = new mysqli($servername, $username, $password,$database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>



<div class="flex flex-col m-4">
    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="inline-block w-full py-2 sm:px-6 lg:px-8">
            <div class="overflow-hidden">
                <table style="margin-left: auto;margin-right: auto;">
                    <thead class=" bg-gradient-to-r from-gray-500 via-white to-gray-500 ...">
                        <tr>
                            <th scope="col" class="text-xl px-6 py-4 font-medium text-left text-black border border-black">
                                <b>ID
                            </th>
                            <th scope="col" class="text-xl px-6 py-4 font-medium text-left text-black border border-black">
                                <b>Link
                            </th>
                            <th scope="col" class="text-xl px-6 py-4 font-medium text-left text-black border border-black">
                                <b>Megoldás
                            </th>
                            <th scope="col" class="text-xl px-6 py-4 font-medium text-left text-black border border-black">
                                <b>Törlés
                            </th>

                        </tr>
                    </thead>
                    <tbody class="bg-neutral-700">
                        <tr class="border-b border-pink-800">
                      @foreach($users as $user)
                            <tr>
                                <td class="px-6 py-4 text-base font-medium text-left text-pink-100 border border-black">{{$user->id}}</td>
                                <td class="px-6 py-4 text-base font-medium text-left text-blue-600 border border-black"><a href="{{$user->link}}"> <u>Link a képhez</a></td>
                                <td class="px-6 py-4 text-base font-medium text-left text-pink-100 border border-black">{{$user->solution}}</td>
                                <td class="px-6 py-4 text-base font-medium text-left text-red-500 border border-black"><button type="button" onclick="window.location='{{url("admin/images/deleteimg/$user->id")}}'">Törlés</button></td>

                            </tr>
                        @endforeach
                        </tr>
                    </tbody>
                </table>
            </div>
            </div>
    </div>
</div>

<!--Kép hozzáadás

    onclick="window.location = 'images/1/addimg/1'"
127.0.0.1:8000/admin/images/1/addimg/1
onclick="window.location('')"

<form method="post" action="">
    @csrf
		<label for="link"><b>Link</b></label>
		<input class="form-control" id="link" type="text" name="link" required>

		<label for="solution"><b>solution</b></label>
		<input class="form-control" id="solution"  type="text" name="solution" required>

		<hr class="mb-3">
        <input class="btn btn-primary" type="submit" id="image" name="create" value="bomb"/>

</form>-->

<!--/admin/images/addimg/{link}/{solution}->[link,solution]
    (/admin/images/addimg/{link},{solution},["link"=>"request()->input('link')","solution"=>"request()->input('solution')"])}}")"


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script type="text/javascript">
	$(function(){
		$('#image').click(function(e){
			var valid = this.form.checkValidity();
			if(valid){
                var link 	= $('#link').val();
                var solution	= $('#solution').val();
				e.preventDefault();
				$.ajax({
					type: 'POST',
					url: "<?php echo $_SERVER['PHP_SELF'];?>",
					data: {link: link,solution: solution},
					success: function(data){
					Swal.fire({
								'title': 'Siker',
								'text': data,
								'type': 'success'
								})
					},
					error: function(data){
						Swal.fire({
								'title': 'Error',
								'text': 'Hiba lépett fel a kép feltöltése közben.',
								'type': 'error'
								})}});
			}
            else
            {
			}
		});
	});
</script>-->

