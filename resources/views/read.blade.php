<!DOCTYPE html>
<html lang="en">
    <body>
        @extends('master')
        @section('main_content')
        <div class="container">
            <div class="row">
                <div class="col-sm">

                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Buku</th>
                            <th>Pengarang</th>
                            <th>Penerbit</th>
                            <th>Tahun terbit</th>
                            <th>Opsi</th>
                        </tr>
                        </thead>
                        <tbdoy>
                            <tr>
                                <td>1</td>
                                <td>Algoritma Informatika</td>
                                <td>Aditiya Rahman</td>
                                <td>Jogjatronik</td>
                                <td>2020</td>
                                <td><a href="#" class="btn btn-success btn-sm">Update</a></td>
                                <td><a href="#" class="btn btn-danger btn-sm">Delete</a></td>
                            </tr>
                        </tbody>
                    </table>
                    @stop
                </div>
            </div>
        </div>
    </body>
</html>
