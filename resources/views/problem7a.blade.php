<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <title>Problem 7a</title>
    <body>
        <div class="content">
            <table>
                @for ($i=5; $i>=1; $i--)        <!-- counter untuk baris -->
                    <tr>
                    @for ($c=1; $c<=$i; $c++)   <!-- counter kolom, juga untuk display angka bertambah -->
                        <td>{{$c}}</td>         <!-- display variable -->
                    @endfor
                    </tr>
                @endfor 
            </table>    
        </div>
    </body>
</html>
