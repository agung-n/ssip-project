<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <title>Problem 7c</title>
    <body>
            <div class="content">
                <table>
                <!-- part1, angka dulu baru space -->
                @php($k = 0)                    <!-- declare batas value display -->
                @for($i=5; $i>=1; $i--)         
                    @if($k<4)                   <!-- membatasi 4 row -->
                    <tr>   
                        @for($j=1; $j<=5; $j++) <!-- mulai dengan set angka dari 1 -->
                            @if($j<=$k)         <!-- jika kurang dari jumlah baris, jangan display -->
                                <td></td>
                            @elseif($j>$k)      <!-- jika sesuai dengan baris, display -->
                                <td>{{$j}}</td>
                            @endif
                        @endfor            

                        @for($j=4; $j>=1; $j--) <!-- set angka bagian kanan -->
                            @if($j<=$k)         <!-- jika kurang dari jumlah baris, jangan display -->
                                <td></td>
                            @elseif($j>$k)      <!-- jika sesuai dengan baris, display -->
                                <td>{{$j}}</td>
                            @endif
                        @endfor
                        @php($k++)              <!-- increment hingga limit -->
                    </tr>
                    @endif
                @endfor

                <!-- part2, space dulu baru angka -->
                @php($k = 4)                    <!-- declare batas value display -->
                @for($i=5; $i>=1; $i--)         <!-- buat 5 row angka -->
                    <tr>   
                        @for($j=1; $j<=5; $j++) <!-- mulai dengan set angka dari 1 -->
                            @if($j<=$k)         <!-- jika kurang dari jumlah baris, jangan display -->
                                <td></td>
                            @elseif($j>$k)      <!-- jika sesuai dengan baris, display -->
                                <td>{{$j}}</td>
                            @endif
                        @endfor            

                        @for($j=4; $j>=1; $j--) <!-- set angka bagian kanan -->
                            @if($j<=$k)         <!-- jika kurang dari jumlah baris, jangan display -->
                                <td></td>
                            @elseif($j>$k)      <!-- jika sesuai dengan baris, display -->
                                <td>{{$j}}</td>
                            @endif
                        @endfor
                        @php($k--)              <!-- decrement hingga limit -->
                    </tr>
                @endfor
    </table>    
        </div>
    </body>
</html>
