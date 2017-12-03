<?php
	
	include('api.php');

	$urlrank = file_get_contents('https://br1.api.riotgames.com/lol/league/v3/positions/by-summoner/'.$con['id_nick'].'?api_key='.$apikey.'');
	//pegando resultado do JSON
	$filas = explode('},',$urlrank);
	$totalfilas=count($filas);

	if($totalfilas==3)
	{
		//fila solo duo primeiro
		$filasolo = $filas[0].'}';
		$solo = str_replace("[","", $filasolo);
		$rankings = json_decode($solo);

		//flex segundo
		$filaflex =$filas[1].'}';
		$flex = str_replace("]","", $filaflex);
		$rankingf = json_decode($flex);

		//tt terceiro
		$filatt =$filas[2];
		$tt = str_replace("]","", $filatt);
		$rankingtt = json_decode($tt);

		//aqui n usaremos o $rankings
		if($rankings->queueType=="RANKED_FLEX_TT")
		{
			if ($rankingtt->queueType=="RANKED_SOLO_5x5")
			{
				//exibindo solo
				echo "<div><strong>Fila:</strong> Solo/Duo</div>";
				if($rankingtt->tier=="BRONZE")
				{
					echo ('<div><img src="img/base-icons/bronze_'.strtolower($rankingttrankingtt->rank).'.png"/></div>');
					echo ("<div>Bronze ".$rankingttrankingtt->rank."</div>");
				}
				elseif($rankingttrankingtt->tier=="SILVER")
				{
					echo ('<div><img src="img/base-icons/silver_'.strtolower($rankingttrankingtt->rank).'.png"/></div>');
					echo ("<div>Prata ".$rankingttrankingtt->rank."</div>");
				}
				elseif($rankingttrankingtt->tier=="GOLD")
				{
					echo ('<div><img src="img/base-icons/gold_'.strtolower($rankingttrankingtt->rank).'.png"/></div>');
					echo ("<div>Ouro ".$rankingttrankingtt->rank."</div>");
				}
				elseif($rankingttrankingtt->tier=="PLATINUM")
				{
					echo ('<div><img src="img/base-icons/platinum_'.strtolower($rankingttrankingtt->rank).'.png"/></div>');
					echo ("<div>Platina ".$rankingttrankingtt->rank."</div>");
				}
				elseif($rankingtt->tier=="DIAMOND")
				{
					echo ('<div><img src="img/base-icons/diamond_'.strtolower($rankingtt->rank).'.png"/></div>');
					echo ("<div>Diamante ".$rankingtt->rank."</div>");
				}
				elseif($rankingtt->tier=="MASTER")
				{
					echo ('<div><img src="img/base-icons/master.png"/></div>');
					echo ("<div>Mestre ".$rankingtt->rank."</div>");
				}
				else
				{
					echo ('<div><img src="img/base-icons/challenger.png"/></div>');
					echo ("<div>Desafiante ".$rankingtt->rank."</div>");
				}

				//exibindo flex
				echo "<div><strong>Fila:</strong> Flex</div>";
				if($rankingf->tier=="BRONZE")
				{
					echo ('<div><img src="img/base-icons/bronze_'.strtolower($rankingf->rank).'.png"/></div>');
					echo ("<div>Bronze ".$rankingf->rank."</div>");
				}
				elseif($rankingf->tier=="SILVER")
				{
					echo ('<div><img src="img/base-icons/silver_'.strtolower($rankingf->rank).'.png"/></div>');
					echo ("<div>Prata ".$rankingf->rank."</div>");
				}
				elseif($rankingf->tier=="GOLD")
				{
					echo ('<div><img src="img/base-icons/gold_'.strtolower($rankingf->rank).'.png"/></div>');
					echo ("<div>Ouro ".$rankingf->rank."</div>");
				}
				elseif($rankingf->tier=="PLATINUM")
				{
					echo ('<div><img src="img/base-icons/platinum_'.strtolower($rankingf->rank).'.png"/></div>');
					echo ("<div>Platina ".$rankingf->rank."</div>");
				}
				elseif($rankingf->tier=="DIAMOND")
				{
					echo ('<div><img src="img/base-icons/diamond_'.strtolower($rankingf->rank).'.png"/></div>');
					echo ("<div>Diamante ".$rankingf->rank."</div>");
				}
				elseif($rankingf->tier=="MASTER")
				{
					echo ('<div><img src="img/base-icons/master.png"/></div>');
					echo ("<div>Mestre ".$rankingf->rank."</div>");
				}
				else
				{
					echo ('<div><img src="img/base-icons/challenger.png"/></div>');
					echo ("<div>Desafiante ".$rankingf->rank."</div>");
				}
			}
			else
			{	
				//exibindo solo
				echo "<div><strong>Fila:</strong> Solo/Duo</div>";
				if($rankingf->tier=="BRONZE")
				{
					echo ('<div><img src="img/base-icons/bronze_'.strtolower($rankingf->rank).'.png"/></div>');
					echo ("<div>Bronze ".$rankingf->rank."</div>");
				}
				elseif($rankingf->tier=="SILVER")
				{
					echo ('<div><img src="img/base-icons/silver_'.strtolower($rankingf->rank).'.png"/></div>');
					echo ("<div>Prata ".$rankingf->rank."</div>");
				}
				elseif($rankingf->tier=="GOLD")
				{
					echo ('<div><img src="img/base-icons/gold_'.strtolower($rankingf->rank).'.png"/></div>');
					echo ("<div>Ouro ".$rankingf->rank."</div>");
				}
				elseif($rankingf->tier=="PLATINUM")
				{
					echo ('<div><img src="img/base-icons/platinum_'.strtolower($rankingf->rank).'.png"/></div>');
					echo ("<div>Platina ".$rankingf->rank."</div>");
				}
				elseif($rankingf->tier=="DIAMOND")
				{
					echo ('<div><img src="img/base-icons/diamond_'.strtolower($rankingf->rank).'.png"/></div>');
					echo ("<div>Diamante ".$rankingf->rank."</div>");
				}
				elseif($rankingf->tier=="MASTER")
				{
					echo ('<div><img src="img/base-icons/master.png"/></div>');
					echo ("<div>Mestre ".$rankingf->rank."</div>");
				}
				else
				{
					echo ('<div><img src="img/base-icons/challenger.png"/></div>');
					echo ("<div>Desafiante ".$rankingf->rank."</div>");
				}

				//exibindo flex
				echo "<div><strong>Fila:</strong> Flex</div>";
				if($rankingttrankingttrankingtt->tier=="BRONZE")
				{
					echo ('<div><img src="img/base-icons/bronze_'.strtolower($rankingttrankingttrankingtt->rank).'.png"/></div>');
					echo ("<div>Bronze ".$rankingttrankingttrankingtt->rank."</div>");
				}
				elseif($rankingttrankingttrankingtt->tier=="SILVER")
				{
					echo ('<div><img src="img/base-icons/silver_'.strtolower($rankingttrankingttrankingtt->rank).'.png"/></div>');
					echo ("<div>Prata ".$rankingttrankingttrankingtt->rank."</div>");
				}
				elseif($rankingttrankingttrankingtt->tier=="GOLD")
				{
					echo ('<div><img src="img/base-icons/gold_'.strtolower($rankingttrankingtt->rank).'.png"/></div>');
					echo ("<div>Ouro ".$rankingttrankingtt->rank."</div>");
				}
				elseif($rankingttrankingtt->tier=="PLATINUM")
				{
					echo ('<div><img src="img/base-icons/platinum_'.strtolower($rankingttrankingtt->rank).'.png"/></div>');
					echo ("<div>Platina ".$rankingttrankingtt->rank."</div>");
				}
				elseif($rankingtt->tier=="DIAMOND")
				{
					echo ('<div><img src="img/base-icons/diamond_'.strtolower($rankingtt->rank).'.png"/></div>');
					echo ("<div>Diamante ".$rankingtt->rank."</div>");
				}
				elseif($rankingtt->tier=="MASTER")
				{
					echo ('<div><img src="img/base-icons/master.png"/></div>');
					echo ("<div>Mestre ".$rankingtt->rank."</div>");
				}
				else
				{
					echo ('<div><img src="img/base-icons/challenger.png"/></div>');
					echo ("<div>Desafiante ".$rankingtt->rank."</div>");
				}
		 	}
		}
		//aqui n usaremos o $rankingf
		elseif($rankingf->queueType=="RANKED_FLEX_TT")
		{
			if ($rankings->queueType=="RANKED_SOLO_5x5")
			{
				//exibindo solo
				echo "<div><strong>Fila:</strong> Solo/Duo</div>";
				if($rankings->tier=="BRONZE")
				{
					echo ('<div><img src="img/base-icons/bronze_'.strtolower($rankings->rank).'.png"/></div>');
					echo ("<div>Bronze ".$rankings->rank."</div>");
				}
				elseif($rankings->tier=="SILVER")
				{
					echo ('<div><img src="img/base-icons/silver_'.strtolower($rankings->rank).'.png"/></div>');
					echo ("<div>Prata ".$rankings->rank."</div>");
				}
				elseif($rankings->tier=="GOLD")
				{
					echo ('<div><img src="img/base-icons/gold_'.strtolower($rankings->rank).'.png"/></div>');
					echo ("<div>Ouro ".$rankings->rank."</div>");
				}
				elseif($rankings->tier=="PLATINUM")
				{
					echo ('<div><img src="img/base-icons/platinum_'.strtolower($rankings->rank).'.png"/></div>');
					echo ("<div>Platina ".$rankings->rank."</div>");
				}
				elseif($rankings->tier=="DIAMOND")
				{
					echo ('<div><img src="img/base-icons/diamond_'.strtolower($rankings->rank).'.png"/></div>');
					echo ("<div>Diamante ".$rankings->rank."</div>");
				}
				elseif($rankings->tier=="MASTER")
				{
					echo ('<div><img src="img/base-icons/master.png"/></div>');
					echo ("<div>Mestre ".$rankings->rank."</div>");
				}
				else
				{
					echo ('<div><img src="img/base-icons/challenger.png"/></div>');
					echo ("<div>Desafiante ".$rankings->rank."</div>");
				}

				//exibindo flex
				echo "<div><strong>Fila:</strong> Flex</div>";
				if($rankingtt->tier=="BRONZE")
				{
					echo ('<div><img src="img/base-icons/bronze_'.strtolower($rankingtt->rank).'.png"/></div>');
					echo ("<div>Bronze ".$rankingtt->rank."</div>");
				}
				elseif($rankingtt->tier=="SILVER")
				{
					echo ('<div><img src="img/base-icons/silver_'.strtolower($rankingtt->rank).'.png"/></div>');
					echo ("<div>Prata ".$rankingtt->rank."</div>");
				}
				elseif($rankingtt->tier=="GOLD")
				{
					echo ('<div><img src="img/base-icons/gold_'.strtolower($rankingtt->rank).'.png"/></div>');
					echo ("<div>Ouro ".$rankingtt->rank."</div>");
				}
				elseif($rankingtt->tier=="PLATINUM")
				{
					echo ('<div><img src="img/base-icons/platinum_'.strtolower($rankingtt->rank).'.png"/></div>');
					echo ("<div>Platina ".$rankingtt->rank."</div>");
				}
				elseif($rankingtt->tier=="DIAMOND")
				{
					echo ('<div><img src="img/base-icons/diamond_'.strtolower($rankingtt->rank).'.png"/></div>');
					echo ("<div>Diamante ".$rankingtt->rank."</div>");
				}
				elseif($rankingtt->tier=="MASTER")
				{
					echo ('<div><img src="img/base-icons/master.png"/></div>');
					echo ("<div>Mestre ".$rankingtt->rank."</div>");
				}
				else
				{
					echo ('<div><img src="img/base-icons/challenger.png"/></div>');
					echo ("<div>Desafiante ".$rankingtt->rank."</div>");
				}
			}
			else
			{	
				//exibindo solo
				echo "<div><strong>Fila:</strong> Solo/Duo</div>";
				if($rankingttrankingtt->tier=="BRONZE")
				{
					echo ('<div><img src="img/base-icons/bronze_'.strtolower($rankingttrankingtt->rank).'.png"/></div>');
					echo ("<div>Bronze ".$rankingttrankingtt->rank."</div>");
				}
				elseif($rankingttrankingtt->tier=="SILVER")
				{
					echo ('<div><img src="img/base-icons/silver_'.strtolower($rankingttrankingtt->rank).'.png"/></div>');
					echo ("<div>Prata ".$rankingttrankingtt->rank."</div>");
				}
				elseif($rankingttrankingtt->tier=="GOLD")
				{
					echo ('<div><img src="img/base-icons/gold_'.strtolower($rankingttrankingtt->rank).'.png"/></div>');
					echo ("<div>Ouro ".$rankingttrankingtt->rank."</div>");
				}
				elseif($rankingttrankingtt->tier=="PLATINUM")
				{
					echo ('<div><img src="img/base-icons/platinum_'.strtolower($rankingttrankingtt->rank).'.png"/></div>');
					echo ("<div>Platina ".$rankingttrankingtt->rank."</div>");
				}
				elseif($rankingtt->tier=="DIAMOND")
				{
					echo ('<div><img src="img/base-icons/diamond_'.strtolower($rankingtt->rank).'.png"/></div>');
					echo ("<div>Diamante ".$rankingtt->rank."</div>");
				}
				elseif($rankingtt->tier=="MASTER")
				{
					echo ('<div><img src="img/base-icons/master.png"/></div>');
					echo ("<div>Mestre ".$rankingtt->rank."</div>");
				}
				else
				{
					echo ('<div><img src="img/base-icons/challenger.png"/></div>');
					echo ("<div>Desafiante ".$rankingtt->rank."</div>");
				}

				//exibindo flex
				echo "<div><strong>Fila:</strong> Flex</div>";
				if($rankings->tier=="BRONZE")
				{
					echo ('<div><img src="img/base-icons/bronze_'.strtolower($rankings->rank).'.png"/></div>');
					echo ("<div>Bronze ".$rankings->rank."</div>");
				}
				elseif($rankings->tier=="SILVER")
				{
					echo ('<div><img src="img/base-icons/silver_'.strtolower($rankings->rank).'.png"/></div>');
					echo ("<div>Prata ".$rankings->rank."</div>");
				}
				elseif($rankings->tier=="GOLD")
				{
					echo ('<div><img src="img/base-icons/gold_'.strtolower($rankings->rank).'.png"/></div>');
					echo ("<div>Ouro ".$rankings->rank."</div>");
				}
				elseif($rankings->tier=="PLATINUM")
				{
					echo ('<div><img src="img/base-icons/platinum_'.strtolower($rankings->rank).'.png"/></div>');
					echo ("<div>Platina ".$rankings->rank."</div>");
				}
				elseif($rankings->tier=="DIAMOND")
				{
					echo ('<div><img src="img/base-icons/diamond_'.strtolower($rankings->rank).'.png"/></div>');
					echo ("<div>Diamante ".$rankings->rank."</div>");
				}
				elseif($rankings->tier=="MASTER")
				{
					echo ('<div><img src="img/base-icons/master.png"/></div>');
					echo ("<div>Mestre ".$rankings->rank."</div>");
				}
				else
				{
					echo ('<div><img src="img/base-icons/challenger.png"/></div>');
					echo ("<div>Desafiante ".$rankings->rank."</div>");
				}
		 	}
		}
		//aqui n usaremo o $rankingtt
		else
		{
			if ($rankings->queueType=="RANKED_SOLO_5x5")
			{
				//exibindo solo
				echo "<div><strong>Fila:</strong> Solo/Duo</div>";
				if($rankings->tier=="BRONZE")
				{
					echo ('<div><img src="img/base-icons/bronze_'.strtolower($rankings->rank).'.png"/></div>');
					echo ("<div>Bronze ".$rankings->rank."</div>");
				}
				elseif($rankings->tier=="SILVER")
				{
					echo ('<div><img src="img/base-icons/silver_'.strtolower($rankings->rank).'.png"/></div>');
					echo ("<div>Prata ".$rankings->rank."</div>");
				}
				elseif($rankings->tier=="GOLD")
				{
					echo ('<div><img src="img/base-icons/gold_'.strtolower($rankings->rank).'.png"/></div>');
					echo ("<div>Ouro ".$rankings->rank."</div>");
				}
				elseif($rankings->tier=="PLATINUM")
				{
					echo ('<div><img src="img/base-icons/platinum_'.strtolower($rankings->rank).'.png"/></div>');
					echo ("<div>Platina ".$rankings->rank."</div>");
				}
				elseif($rankings->tier=="DIAMOND")
				{
					echo ('<div><img src="img/base-icons/diamond_'.strtolower($rankings->rank).'.png"/></div>');
					echo ("<div>Diamante ".$rankings->rank."</div>");
				}
				elseif($rankings->tier=="MASTER")
				{
					echo ('<div><img src="img/base-icons/master.png"/></div>');
					echo ("<div>Mestre ".$rankings->rank."</div>");
				}
				else
				{
					echo ('<div><img src="img/base-icons/challenger.png"/></div>');
					echo ("<div>Desafiante ".$rankings->rank."</div>");
				}

				//exibindo flex
				echo "<div><strong>Fila:</strong> Flex</div>";
				if($rankingf->tier=="BRONZE")
				{
					echo ('<div><img src="img/base-icons/bronze_'.strtolower($rankingf->rank).'.png"/></div>');
					echo ("<div>Bronze ".$rankingf->rank."</div>");
				}
				elseif($rankingf->tier=="SILVER")
				{
					echo ('<div><img src="img/base-icons/silver_'.strtolower($rankingf->rank).'.png"/></div>');
					echo ("<div>Prata ".$rankingf->rank."</div>");
				}
				elseif($rankingf->tier=="GOLD")
				{
					echo ('<div><img src="img/base-icons/gold_'.strtolower($rankingf->rank).'.png"/></div>');
					echo ("<div>Ouro ".$rankingf->rank."</div>");
				}
				elseif($rankingf->tier=="PLATINUM")
				{
					echo ('<div><img src="img/base-icons/platinum_'.strtolower($rankingf->rank).'.png"/></div>');
					echo ("<div>Platina ".$rankingf->rank."</div>");
				}
				elseif($rankingf->tier=="DIAMOND")
				{
					echo ('<div><img src="img/base-icons/diamond_'.strtolower($rankingf->rank).'.png"/></div>');
					echo ("<div>Diamante ".$rankingf->rank."</div>");
				}
				elseif($rankingf->tier=="MASTER")
				{
					echo ('<div><img src="img/base-icons/master.png"/></div>');
					echo ("<div>Mestre ".$rankingf->rank."</div>");
				}
				else
				{
					echo ('<div><img src="img/base-icons/challenger.png"/></div>');
					echo ("<div>Desafiante ".$rankingf->rank."</div>");
				}
			}
			else
			{	
				//exibindo solo
				echo "<div><strong>Fila:</strong> Solo/Duo</div>";
				if($rankingf->tier=="BRONZE")
				{
					echo ('<div><img src="img/base-icons/bronze_'.strtolower($rankingf->rank).'.png"/></div>');
					echo ("<div>Bronze ".$rankingf->rank."</div>");
				}
				elseif($rankingf->tier=="SILVER")
				{
					echo ('<div><img src="img/base-icons/silver_'.strtolower($rankingf->rank).'.png"/></div>');
					echo ("<div>Prata ".$rankingf->rank."</div>");
				}
				elseif($rankingf->tier=="GOLD")
				{
					echo ('<div><img src="img/base-icons/gold_'.strtolower($rankingf->rank).'.png"/></div>');
					echo ("<div>Ouro ".$rankingf->rank."</div>");
				}
				elseif($rankingf->tier=="PLATINUM")
				{
					echo ('<div><img src="img/base-icons/platinum_'.strtolower($rankingf->rank).'.png"/></div>');
					echo ("<div>Platina ".$rankingf->rank."</div>");
				}
				elseif($rankingf->tier=="DIAMOND")
				{
					echo ('<div><img src="img/base-icons/diamond_'.strtolower($rankingf->rank).'.png"/></div>');
					echo ("<div>Diamante ".$rankingf->rank."</div>");
				}
				elseif($rankingf->tier=="MASTER")
				{
					echo ('<div><img src="img/base-icons/master.png"/></div>');
					echo ("<div>Mestre ".$rankingf->rank."</div>");
				}
				else
				{
					echo ('<div><img src="img/base-icons/challenger.png"/></div>');
					echo ("<div>Desafiante ".$rankingf->rank."</div>");
				}

				//exibindo flex
				echo "<div><strong>Fila:</strong> Flex</div>";
				if($rankings->tier=="BRONZE")
				{
					echo ('<div><img src="img/base-icons/bronze_'.strtolower($rankings->rank).'.png"/></div>');
					echo ("<div>Bronze ".$rankings->rank."</div>");
				}
				elseif($rankings->tier=="SILVER")
				{
					echo ('<div><img src="img/base-icons/silver_'.strtolower($rankings->rank).'.png"/></div>');
					echo ("<div>Prata ".$rankings->rank."</div>");
				}
				elseif($rankings->tier=="GOLD")
				{
					echo ('<div><img src="img/base-icons/gold_'.strtolower($rankings->rank).'.png"/></div>');
					echo ("<div>Ouro ".$rankings->rank."</div>");
				}
				elseif($rankings->tier=="PLATINUM")
				{
					echo ('<div><img src="img/base-icons/platinum_'.strtolower($rankings->rank).'.png"/></div>');
					echo ("<div>Platina ".$rankings->rank."</div>");
				}
				elseif($rankings->tier=="DIAMOND")
				{
					echo ('<div><img src="img/base-icons/diamond_'.strtolower($rankings->rank).'.png"/></div>');
					echo ("<div>Diamante ".$rankings->rank."</div>");
				}
				elseif($rankings->tier=="MASTER")
				{
					echo ('<div><img src="img/base-icons/master.png"/></div>');
					echo ("<div>Mestre ".$rankings->rank."</div>");
				}
				else
				{
					echo ('<div><img src="img/base-icons/challenger.png"/></div>');
					echo ("<div>Desafiante ".$rankings->rank."</div>");
				}
		 	}
		}
	}
	elseif($totalfilas==2)
	{
		//fila solo duo
		$filasolo = $filas[0].'}';
		$solo = str_replace("[","", $filasolo);
		$rankings = json_decode($solo);

		//flex
		$filaflex =$filas[1];
		$flex = str_replace("]","", $filaflex);
		$rankingf = json_decode($flex);
		//if para saber qual fila está primeiro na consulta, pois o link inverte os resultados
		if ($rankings->queueType=="RANKED_SOLO_5x5")
		{
			//exibindo solo
			echo "<div><strong>Fila:</strong> Solo/Duo</div>";
			if($rankings->tier=="BRONZE")
			{
				echo ('<div><img src="img/base-icons/bronze_'.strtolower($rankings->rank).'.png"/></div>');
				echo ("<div>Bronze ".$rankings->rank."</div>");
			}
			elseif($rankings->tier=="SILVER")
			{
				echo ('<div><img src="img/base-icons/silver_'.strtolower($rankings->rank).'.png"/></div>');
				echo ("<div>Prata ".$rankings->rank."</div>");
			}
			elseif($rankings->tier=="GOLD")
			{
				echo ('<div><img src="img/base-icons/gold_'.strtolower($rankings->rank).'.png"/></div>');
				echo ("<div>Ouro ".$rankings->rank."</div>");
			}
			elseif($rankings->tier=="PLATINUM")
			{
				echo ('<div><img src="img/base-icons/platinum_'.strtolower($rankings->rank).'.png"/></div>');
				echo ("<div>Platina ".$rankings->rank."</div>");
			}
			elseif($rankings->tier=="DIAMOND")
			{
				echo ('<div><img src="img/base-icons/diamond_'.strtolower($rankings->rank).'.png"/></div>');
				echo ("<div>Diamante ".$rankings->rank."</div>");
			}
			elseif($rankings->tier=="MASTER")
			{
				echo ('<div><img src="img/base-icons/master.png"/></div>');
				echo ("<div>Mestre ".$rankings->rank."</div>");
			}
			else
			{
				echo ('<div><img src="img/base-icons/challenger.png"/></div>');
				echo ("<div>Desafiante ".$rankings->rank."</div>");
			}

			//exibindo flex
			echo "<div><strong>Fila:</strong> Flex</div>";
			if($rankingf->tier=="BRONZE")
			{
				echo ('<div><img src="img/base-icons/bronze_'.strtolower($rankingf->rank).'.png"/></div>');
				echo ("<div>Bronze ".$rankingf->rank."</div>");
			}
			elseif($rankingf->tier=="SILVER")
			{
				echo ('<div><img src="img/base-icons/silver_'.strtolower($rankingf->rank).'.png"/></div>');
				echo ("<div>Prata ".$rankingf->rank."</div>");
			}
			elseif($rankingf->tier=="GOLD")
			{
				echo ('<div><img src="img/base-icons/gold_'.strtolower($rankingf->rank).'.png"/></div>');
				echo ("<div>Ouro ".$rankingf->rank."</div>");
			}
			elseif($rankingf->tier=="PLATINUM")
			{
				echo ('<div><img src="img/base-icons/platinum_'.strtolower($rankingf->rank).'.png"/></div>');
				echo ("<div>Platina ".$rankingf->rank."</div>");
			}
			elseif($rankingf->tier=="DIAMOND")
			{
				echo ('<div><img src="img/base-icons/diamond_'.strtolower($rankingf->rank).'.png"/></div>');
				echo ("<div>Diamante ".$rankingf->rank."</div>");
			}
			elseif($rankingf->tier=="MASTER")
			{
				echo ('<div><img src="img/base-icons/master.png"/></div>');
				echo ("<div>Mestre ".$rankingf->rank."</div>");
			}
			else
			{
				echo ('<div><img src="img/base-icons/challenger.png"/></div>');
				echo ("<div>Desafiante ".$rankingf->rank."</div>");
			}
		}
		else
		{	
			//exibindo solo
			echo "<div><strong>Fila:</strong> Solo/Duo</div>";
			if($rankingf->tier=="BRONZE")
			{
				echo ('<div><img src="img/base-icons/bronze_'.strtolower($rankingf->rank).'.png"/></div>');
				echo ("<div>Bronze ".$rankingf->rank."</div>");
			}
			elseif($rankingf->tier=="SILVER")
			{
				echo ('<div><img src="img/base-icons/silver_'.strtolower($rankingf->rank).'.png"/></div>');
				echo ("<div>Prata ".$rankingf->rank."</div>");
			}
			elseif($rankingf->tier=="GOLD")
			{
				echo ('<div><img src="img/base-icons/gold_'.strtolower($rankingf->rank).'.png"/></div>');
				echo ("<div>Ouro ".$rankingf->rank."</div>");
			}
			elseif($rankingf->tier=="PLATINUM")
			{
				echo ('<div><img src="img/base-icons/platinum_'.strtolower($rankingf->rank).'.png"/></div>');
				echo ("<div>Platina ".$rankingf->rank."</div>");
			}
			elseif($rankingf->tier=="DIAMOND")
			{
				echo ('<div><img src="img/base-icons/diamond_'.strtolower($rankingf->rank).'.png"/></div>');
				echo ("<div>Diamante ".$rankingf->rank."</div>");
			}
			elseif($rankingf->tier=="MASTER")
			{
				echo ('<div><img src="img/base-icons/master.png"/></div>');
				echo ("<div>Mestre ".$rankingf->rank."</div>");
			}
			else
			{
				echo ('<div><img src="img/base-icons/challenger.png"/></div>');
				echo ("<div>Desafiante ".$rankingf->rank."</div>");
			}

			//exibindo flex
			echo "<div><strong>Fila:</strong> Flex</div>";
			if($rankings->tier=="BRONZE")
			{
				echo ('<div><img src="img/base-icons/bronze_'.strtolower($rankings->rank).'.png"/></div>');
				echo ("<div>Bronze ".$rankings->rank."</div>");
			}
			elseif($rankings->tier=="SILVER")
			{
				echo ('<div><img src="img/base-icons/silver_'.strtolower($rankings->rank).'.png"/></div>');
				echo ("<div>Prata ".$rankings->rank."</div>");
			}
			elseif($rankings->tier=="GOLD")
			{
				echo ('<div><img src="img/base-icons/gold_'.strtolower($rankings->rank).'.png"/></div>');
				echo ("<div>Ouro ".$rankings->rank."</div>");
			}
			elseif($rankings->tier=="PLATINUM")
			{
				echo ('<div><img src="img/base-icons/platinum_'.strtolower($rankings->rank).'.png"/></div>');
				echo ("<div>Platina ".$rankings->rank."</div>");
			}
			elseif($rankings->tier=="DIAMOND")
			{
				echo ('<div><img src="img/base-icons/diamond_'.strtolower($rankings->rank).'.png"/></div>');
				echo ("<div>Diamante ".$rankings->rank."</div>");
			}
			elseif($rankings->tier=="MASTER")
			{
				echo ('<div><img src="img/base-icons/master.png"/></div>');
				echo ("<div>Mestre ".$rankings->rank."</div>");
			}
			else
			{
				echo ('<div><img src="img/base-icons/challenger.png"/></div>');
				echo ("<div>Desafiante ".$rankings->rank."</div>");
			}
	 	}
 	}
 	else
 	{
 		$filasolo = $filas[0];
		$solo = str_replace("[","", $filasolo);
		$solo1 = str_replace("]","", $solo);
		$ranking = json_decode($solo1);
		if ($ranking->queueType=="RANKED_SOLO_5x5")
		{
			$nomefila="<strong>Fila:</strong> Solo/Duo";
		}
		else
		{
			$nomefila="<strong>Fila:</strong> Flex";
		}
 		echo "<div>".$nomefila."</div>";
		if($ranking->tier=="BRONZE")
		{
			echo ('<div><img src="img/base-icons/bronze.png"/></div>');
			echo ("<div>Bronze ".$ranking->rank."</div>");
		}
		elseif($ranking->tier=="SILVER")
		{
			echo ('<div><img src="img/base-icons/silver.png"/></div>');
			echo ("<div>Prata ".$ranking->rank."</div>");
		}
		elseif($ranking->tier=="GOLD")
		{
			echo ('<div><img src="img/base-icons/gold.png"/></div>');
			echo ("<div>Ouro ".$ranking->rank."</div>");
		}
		elseif($ranking->tier=="PLATINUM")
		{
			echo ('<div><img src="img/base-icons/platinum.png"/></div>');
			echo ("<div>Platina ".$ranking->rank."</div>");
		}
		elseif($ranking->tier=="DIAMOND")
		{
			echo ('<div><img src="img/base-icons/diamond.png"/></div>');
			echo ("<div>Diamante ".$ranking->rank."</div>");
		}
		elseif($ranking->tier=="MASTER")
		{
			echo ('<div><img src="img/base-icons/master.png"/></div>');
			echo ("<div>Mestre ".$ranking->rank."</div>");
		}
		else
		{
			echo ('<div><img src="img/base-icons/challenger.png"/></div>');
			echo ("<div>Desafiante ".$ranking->rank."</div>");
		}
 	}	
?>