<?php

class dice{
    function roll(){
        // 주사위 게임
        $cpu = rand(1,6);
        $player = rand(1,6);

        echo "컴퓨터 - ", $cpu, "<br>";
        echo "사용자 - ", $player, "<br>";
        echo "<br>[결과] <br>";

        if($cpu == $player){
            echo "무승부";
        }
        else if($cpu > $player){
            echo "패배";
        }
        else if($cpu < $player){
            echo "승리";
        }
    }
}
?>