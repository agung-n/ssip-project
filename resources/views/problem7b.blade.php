<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <title>Problem 7b</title>
    <body>
        <div class="content">
            <table>
                @for ($i=1; $i<=5; $i++) <!-- counter untuk baris -->
                    <tr>
                    @for ($c=5; $c>=$i; $c--) <!-- counter kolom, juga untuk display angka menurun -->
                        <td>{{$c}}</td>  <!-- display variable -->
                    @endfor
                    </tr>
                @endfor 
            </table>    
        </div>
    </body>
</html>
