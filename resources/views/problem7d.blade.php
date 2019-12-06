<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <title>Problem 7d</title>
    <body>
        <div class="content">
            <table>
                <!-- part1, space dulu baru angka -->
                @for($i=1; $i<=4; $i++)         <!-- buat 4 row angka -->
                    <tr>
                    @for($j=4; $j>=$i; $j--)    <!-- mulai dengan 4 space yang terus berkurang -->
                        <td></td>
                    @endfor
        
                    @for($k=1; $k<=$i; $k++)    <!-- menghitung naik value k lalu display -->
                        <td>{{$k}}</td>
                    @endfor  
                    
                    @for($k=$i-1; $k>=1; $k--)  <!-- menghitung turun value dari tengah -->
                        <td>{{$k}}</td>
                    @endfor            
                        
                    </tr>   
                @endfor
                
                <!-- part2, kebalikan dari yang pertama -->
                @php($k=0)                      <!-- set jumlah spasi di awal baris -->
                @for($i=5; $i>=1; $i--)         <!-- buat 5 row angka -->
                    <tr>    
                    @for($j=1; $j<=$k; $j++)    <!-- mulai dengan 0 space yang terus bertambah -->
                        <td></td>
                    @endfor
                    
                    @for($j=1; $j<=$i; $j++)    <!-- menghitung naik value j -->
                        <td>{{$j}}</td>
                    @endfor
     
                    @for($j=$i-1; $j>=1; $j--)  <!-- menghitung turun value dari tengah -->
                        <td>{{$j}}</td>
                    @endfor
                    </tr>
                    @php($k=$k+1)               <!-- menambahkan jumlah spasi di awal barus -->
                @endfor

            </table>    
        </div>
    </body>
</html>
