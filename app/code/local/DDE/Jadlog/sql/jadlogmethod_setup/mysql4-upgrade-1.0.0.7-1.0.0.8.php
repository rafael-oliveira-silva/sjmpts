﻿<?php

$installer = $this;

$installer->startSetup();

$installer->run('
	INSERT INTO '.$installer->getTable('jadlogmethod/cep').'( estado, localidade, cep_inicial, cep_final, standard, rodoviario, package, economico, doc, corporate, com, internacional, cargo, emergencia ) VALUES("MG","Malacacheta","39690000","39694999","4","5", "", "", "", "", "", "", "", ""),
		("MG","Franciscópolis","39695000","39699999","5","6", "", "", "", "", "", "", "", ""),
		("MG","Peçanha","39700000","39702999","4","5", "", "", "", "", "", "", "", ""),
		("MG","Cantagalo","39703000","39704999","4","5", "", "", "", "", "", "", "", ""),
		("MG","São João Evangelista","39705000","39706999","4","5", "", "", "", "", "", "", "", ""),
		("MG","São José do Jacuri","39707000","39707999","4","5", "", "", "", "", "", "", "", ""),
		("MG","Frei Lagonegro","39708000","39709999","5","6", "", "", "", "", "", "", "", ""),
		("MG","Coroaci","39710000","39714999","4","5", "", "", "", "", "", "", "", ""),
		("MG","Virgolândia","39715000","39717999","4","5", "", "", "", "", "", "", "", ""),
		("MG","Nacip Raydan","39718000","39719999","4","5", "", "", "", "", "", "", "", ""),
		("MG","Gonzaga","39720000","39722999","4","5", "", "", "", "", "", "", "", ""),
		("MG","São Geraldo da Piedade","39723000","39724999","4","5", "", "", "", "", "", "", "", ""),
		("MG","Santa Efigênia de Minas","39725000","39727999","5","6", "", "", "", "", "", "", "", ""),
		("MG","Sardoá","39728000","39729999","5","6", "", "", "", "", "", "", "", ""),
		("MG","Virginópolis","39730000","39734999","4","5", "", "", "", "", "", "", "", ""),
		("MG","Divinolândia de Minas","39735000","39739999","4","5", "", "", "", "", "", "", "", ""),
		("MG","Guanhães","39740000","39744999","4","5", "", "", "", "", "", "", "", ""),
		("MG","Senhora do Porto","39745000","39749999","4","5", "", "", "", "", "", "", "", ""),
		("MG","Sabinópolis","39750000","39754999","4","5", "", "", "", "", "", "", "", ""),
		("MG","Materlândia","39755000","39764999","4","5", "", "", "", "", "", "", "", ""),
		("MG","Paulistas","39765000","39769999","4","5", "", "", "", "", "", "", "", ""),
		("MG","Coluna","39770000","39774999","4","5", "", "", "", "", "", "", "", ""),
		("MG","José Raydan","39775000","39779999","5","6", "", "", "", "", "", "", "", ""),
		("MG","Santa Maria do Suaçuí","39780000","39783999","4","5", "", "", "", "", "", "", "", ""),
		("MG","São Pedro do Suaçuí","39784000","39784999","4","5", "", "", "", "", "", "", "", ""),
		("MG","São José da Safira","39785000","39789999","5","6", "", "", "", "", "", "", "", ""),
		("MG","Água Boa","39790000","39794999","8","9", "", "", "", "", "", "", "", ""),
		("MG","São Sebastião do Maranhão","39795000","39799999","4","5", "", "", "", "", "", "", "", ""),
		("MG","Teófilo Otoni","39800000","39805999","2","3", "", "", "", "", "", "", "", ""),
		("MG","Caraí","39810000","39813999","4","5", "", "", "", "", "", "", "", ""),
		("MG","Pavão","39814000","39814999","4","5", "", "", "", "", "", "", "", ""),
		("MG","Itaipé","39815000","39815999","4","5", "", "", "", "", "", "", "", ""),
		("MG","Catuji","39816000","39816999","4","5", "", "", "", "", "", "", "", ""),
		("MG","Novo Oriente de Minas","39817000","39817999","4","5", "", "", "", "", "", "", "", ""),
		("MG","Padre Paraíso","39818000","39819999","4","5", "", "", "", "", "", "", "", ""),
		("MG","Novo Cruzeiro","39820000","39824999","5","6", "", "", "", "", "", "", "", ""),
		("MG","Ladainha","39825000","39826999","4","5", "", "", "", "", "", "", "", ""),
		("MG","Poté","39827000","39829999","4","5", "", "", "", "", "", "", "", ""),
		("MG","Itambacuri","39830000","39834999","4","5", "", "", "", "", "", "", "", ""),
		("MG","Campanário","39835000","39836999","4","5", "", "", "", "", "", "", "", ""),
		("MG","Jampruca","39837000","39839999","4","5", "", "", "", "", "", "", "", ""),
		("MG","Frei Gaspar","39840000","39847999","4","5", "", "", "", "", "", "", "", ""),
		("MG","São José do Divino","39848000","39849999","9","10", "", "", "", "", "", "", "", ""),
		("MG","Ataléia","39850000","39854999","4","5", "", "", "", "", "", "", "", ""),
		("MG","Ouro Verde de Minas","39855000","39859999","4","5", "", "", "", "", "", "", "", ""),
		("MG","Nanuque","39860000","39863999","5","6", "", "", "", "", "", "", "", ""),
		("MG","Carlos Chagas","39864000","39867999","4","5", "", "", "", "", "", "", "", ""),
		("MG","Serra dos Aimorés","39868000","39869999","4","5", "", "", "", "", "", "", "", ""),
		("MG","Fronteira dos Vales","39870000","39872999","4","5", "", "", "", "", "", "", "", ""),
		("MG","Machacalis","39873000","39873999","4","5", "", "", "", "", "", "", "", ""),
		("MG","Santa Helena de Minas","39874000","39874999","5","6", "", "", "", "", "", "", "", ""),
		("MG","Bertópolis","39875000","39877999","4","5", "", "", "", "", "", "", "", ""),
		("MG","Umburatiba","39878000","39879999","4","5", "", "", "", "", "", "", "", ""),
		("MG","Águas Formosas","39880000","39884999","4","5", "", "", "", "", "", "", "", ""),
		("MG","Crisólita","39885000","39889999","5","6", "", "", "", "", "", "", "", ""),
		("MG","Joaíma","39890000","39892999","4","5", "", "", "", "", "", "", "", ""),
		("MG","Monte Formoso","39893000","39894999","5","6", "", "", "", "", "", "", "", ""),
		("MG","Felisburgo","39895000","39899999","4","5", "", "", "", "", "", "", "", ""),
		("MG","Almenara","39900000","39911999","4","5", "", "", "", "", "", "", "", ""),
		("MG","Divisópolis","39912000","39914999","4","5", "", "", "", "", "", "", "", ""),
		("MG","Mata Verde","39915000","39916999","4","5", "", "", "", "", "", "", "", ""),
		("MG","Bandeira","39917000","39919999","4","5", "", "", "", "", "", "", "", ""),
		("MG","Jordânia","39920000","39924999","4","5", "", "", "", "", "", "", "", ""),
		("MG","Salto da Divisa","39925000","39927999","4","5", "", "", "", "", "", "", "", ""),
		("MG","Santa Maria do Salto","39928000","39929999","4","5", "", "", "", "", "", "", "", ""),
		("MG","Jacinto","39930000","39934999","4","5", "", "", "", "", "", "", "", ""),
		("MG","Santo Antônio do Jacinto","39935000","39939999","4","5", "", "", "", "", "", "", "", ""),
		("MG","Rio do Prado","39940000","39944999","4","5", "", "", "", "", "", "", "", ""),
		("MG","Palmópolis","39945000","39949999","4","5", "", "", "", "", "", "", "", ""),
		("MG","Rubim","39950000","39959999","4","5", "", "", "", "", "", "", "", ""),
		("MG","Jequitinhonha","39960000","39969999","4","5", "", "", "", "", "", "", "", ""),
		("MG","Pedra Azul","39970000","39979999","4","5", "", "", "", "", "", "", "", ""),
		("MG","Cachoeira de Pajeú","39980000","39989999","4","5", "", "", "", "", "", "", "", ""),
		("MG","Águas Vermelhas","39990000","39994999","4","5", "", "", "", "", "", "", "", ""),
		("MG","Divisa Alegre","39995000","39999999","5","6", "", "", "", "", "", "", "", ""),
		("BA","Salvador","40000000","41000000","1","7", "", "", "", "", "", "", "", ""),
		("BA","Salvador","41000001","42499999","1","7", "", "", "", "", "", "", "", ""),
		("BA","Madre de Deus","42600000","42699999","9","13", "", "", "", "", "", "", "", ""),
		("BA","Lauro de Freitas","42700000","42799999","2","8", "", "", "", "", "", "", "", ""),
		("BA","Camaçari","42800000","42809999","2","8", "", "", "", "", "", "", "", ""),
		("BA","Camaçari","42810000","42810480","2","8", "", "", "", "", "", "", "", ""),
		("BA","Camaçari","42810481","42819999","2","8", "", "", "", "", "", "", "", ""),
		("BA","Arembepe (Camaçari)","42835000","42839999","3","8", "", "", "", "", "", "", "", ""),
		("BA","Abrantes (Camaçari)","42840000","42849999","3","8", "", "", "", "", "", "", "", ""),
		("BA","Dias D\'Ávila","42850000","43699999","8","12", "", "", "", "", "", "", "", ""),
		("BA","Simões Filho","43700000","43799999","3","7", "", "", "", "", "", "", "", ""),
		("BA","Candeias","43800000","43839999","4","8", "", "", "", "", "", "", "", ""),
		("BA","Passé (Candeias)","43840000","43840999","5","9", "", "", "", "", "", "", "", ""),
		("BA","Caroba (Candeias)","43841000","43842999","5","9", "", "", "", "", "", "", "", ""),
		("BA","Menino Jesus (Candeias)","43843000","43843999","5","9", "", "", "", "", "", "", "", ""),
		("BA","Madeira (Candeias)","43844000","43844999","5","9", "", "", "", "", "", "", "", ""),
		("BA","Passagem dos Teixeiras (Candeias)","43845000","43845999","5","9", "", "", "", "", "", "", "", ""),
		("BA","Cabôto (Candeias)","43846000","43849999","5","9", "", "", "", "", "", "", "", ""),
		("BA","São Sebastião do Passe","43850000","43899999","8","12", "", "", "", "", "", "", "", ""),
		("BA","São Francisco do Conde","43900000","43999999","8","12", "", "", "", "", "", "", "", ""),
		("BA","Feira de Santana","44000000","44099999","2","7", "", "", "", "", "", "", "", ""),
		("BA","Humildes (Feira de Santana)","44135000","44149999","2","7", "", "", "", "", "", "", "", ""),
		("BA","Santa Bárbara","44150000","44159999","5","9", "", "", "", "", "", "", "", ""),
		("BA","Tanquinho","44160000","44179999","5","9", "", "", "", "", "", "", "", ""),
		("BA","Antônio Cardoso","44180000","44189999","5","9", "", "", "", "", "", "", "", ""),
		("BA","Santo Estevão","44190000","44199999","5","9", "", "", "", "", "", "", "", ""),
		("BA","Santo Amaro","44200000","44219999","9","13", "", "", "", "", "", "", "", ""),
		("BA","Saubara","44220000","44229999","5","9", "", "", "", "", "", "", "", ""),
		("BA","Amélia Rodrigues","44230000","44244999","8","12", "", "", "", "", "", "", "", ""),
		("BA","Conceição do Jacuípe","44245000","44249999","8","12", "", "", "", "", "", "", "", ""),
		("BA","Coração de Maria","44250000","44254999","5","9", "", "", "", "", "", "", "", ""),
		("BA","Irará","44255000","44259999","5","9", "", "", "", "", "", "", "", ""),
		("BA","Santanópolis","44260000","44269999","5","9", "", "", "", "", "", "", "", ""),
		("BA","Terra Nova","44270000","44279999","5","9", "", "", "", "", "", "", "", ""),
		("BA","Teodoro Sampaio","44280000","44299999","5","9", "", "", "", "", "", "", "", ""),
		("BA","Cachoeira","44300000","44319999","4","8", "", "", "", "", "", "", "", ""),
		("BA","Conceição da Feira","44320000","44329999","4","8", "", "", "", "", "", "", "", ""),
		("BA","São Gonçalo dos Campos","44330000","44339999","8","12", "", "", "", "", "", "", "", ""),
		("BA","Muritiba","44340000","44344999","4","8", "", "", "", "", "", "", "", ""),
		("BA","Cabaceiras do Paraguaçu","44345000","44349999","4","8", "", "", "", "", "", "", "", ""),
		("BA","Governador Mangabeira","44350000","44359999","4","8", "", "", "", "", "", "", "", ""),
		("BA","São Félix","44360000","44379999","4","8", "", "", "", "", "", "", "", ""),
		("BA","Cruz das Almas","44380000","44399999","3","7", "", "", "", "", "", "", "", ""),
		("BA","Nazaré","44400000","44419999","6","10", "", "", "", "", "", "", "", ""),
		("BA","Maragogipe","44420000","44449999","7","11", "", "", "", "", "", "", "", ""),
		("BA","Salinas da Margarida","44450000","44459999","6","10", "", "", "", "", "", "", "", ""),
		("BA","Itaparica","44460000","44469999","6","10", "", "", "", "", "", "", "", ""),
		("BA","Vera Cruz","44470000","44479999","10","14", "", "", "", "", "", "", "", ""),
		("BA","Jaguaripe","44480000","44489999","5","9", "", "", "", "", "", "", "", ""),
		("BA","Aratuípe","44490000","44499999","5","9", "", "", "", "", "", "", "", ""),
		("BA","Castro Alves","44500000","44519999","9","13", "", "", "", "", "", "", "", ""),
		("BA","Rafael Jambeiro","44520000","44529999","5","9", "", "", "", "", "", "", "", ""),
		("BA","Sapeaçu","44530000","44539999","4","8", "", "", "", "", "", "", "", ""),
		("BA","Conceição do Almeida","44540000","44549999","4","8", "", "", "", "", "", "", "", ""),
		("BA","São Felipe","44550000","44559999","4","8", "", "", "", "", "", "", "", ""),
		("BA","Dom Macedo Costa","44560000","44564999","5","9", "", "", "", "", "", "", "", ""),
		("BA","Varzedo","44565000","44569999","5","9", "", "", "", "", "", "", "", ""),
		("BA","Santo Antônio de Jesus","44570000","44574999","4","8", "", "", "", "", "", "", "", ""),
		("BA","Muniz Ferreira","44575000","44579999","5","9", "", "", "", "", "", "", "", ""),
		("BA","São Miguel das Matas","44580000","44589999","7","10", "", "", "", "", "", "", "", ""),
		("BA","Santa Terezinha","44590000","44599999","5","9", "", "", "", "", "", "", "", ""),
		("BA","Ipirá","44600000","44609999","5","9", "", "", "", "", "", "", "", ""),
		("BA","Pintadas","44610000","44619999","5","9", "", "", "", "", "", "", "", ""),
		("BA","Baixa Grande","44620000","44629999","9","13", "", "", "", "", "", "", "", ""),
		("BA","Mairi","44630000","44634999","5","9", "", "", "", "", "", "", "", ""),
		("BA","Várzea da Roça","44635000","44639999","5","9", "", "", "", "", "", "", "", ""),
		("BA","Riachão do Jacuípe","44640000","44641999","5","9", "", "", "", "", "", "", "", ""),
		("BA","Nova Fátima","44642000","44644999","5","9", "", "", "", "", "", "", "", ""),
		("BA","Capela do Alto Alegre","44645000","44649999","5","9", "", "", "", "", "", "", "", ""),
		("BA","Gavião","44650000","44654999","5","9", "", "", "", "", "", "", "", ""),
		("BA","Pé de Serra","44655000","44659999","5","9", "", "", "", "", "", "", "", ""),
		("BA","Serra Preta","44660000","44669999","5","9", "", "", "", "", "", "", "", ""),
		("BA","Anguera","44670000","44679999","5","9", "", "", "", "", "", "", "", ""),
		("BA","Ipecaetá","44680000","44689999","5","9", "", "", "", "", "", "", "", ""),
		("BA","Várzea Nova","44690000","44694999","5","9", "", "", "", "", "", "", "", ""),
		("BA","Capim Grosso","44695000","44697999","5","9", "", "", "", "", "", "", "", ""),
		("BA","São José do Jacuípe","44698000","44699999","5","9", "", "", "", "", "", "", "", ""),
		("BA","Jacobina","44700000","44709999","9","13", "", "", "", "", "", "", "", ""),
		("BA","Serrolândia","44710000","44712999","9","13", "", "", "", "", "", "", "", ""),
		("BA","Quixabeira","44713000","44714999","5","9", "", "", "", "", "", "", "", ""),
		("BA","Várzea do Poço","44715000","44717999","5","9", "", "", "", "", "", "", "", ""),
		("BA","Ourolândia","44718000","44719999","5","9", "", "", "", "", "", "", "", ""),
		("BA","Miguel Calmon","44720000","44729999","5","9", "", "", "", "", "", "", "", ""),
		("BA","Caém","44730000","44739999","5","9", "", "", "", "", "", "", "", ""),
		("BA","Saúde","44740000","44744999","5","9", "", "", "", "", "", "", "", ""),
		("BA","Mirangaba","44745000","44749999","5","9", "", "", "", "", "", "", "", ""),
		("BA","Caldeirão Grande","44750000","44754999","9","13", "", "", "", "", "", "", "", ""),
		("BA","Ponto Novo","44755000","44769999","5","9", "", "", "", "", "", "", "", ""),
		("BA","Pindobaçu","44770000","44774999","9","13", "", "", "", "", "", "", "", ""),
		("BA","Filadélfia","44775000","44779999","5","9", "", "", "", "", "", "", "", ""),
		("BA","Antônio Gonçalves","44780000","44789999","9","13", "", "", "", "", "", "", "", ""),
		("BA","Campo Formoso","44790000","44797999","9","13", "", "", "", "", "", "", "", ""),
		("BA","Umburanas","44798000","44799999","5","9", "", "", "", "", "", "", "", ""),
		("BA","Mundo Novo","44800000","44829999","5","9", "", "", "", "", "", "", "", ""),
		("BA","Piritiba","44830000","44839999","9","13", "", "", "", "", "", "", "", ""),
		("BA","Tapiramutá","44840000","44849999","9","13", "", "", "", "", "", "", "", ""),
		("BA","Morro do Chapéu","44850000","44879999","5","9", "", "", "", "", "", "", "", ""),
		("BA","Cafarnaum","44880000","44884999","5","9", "", "", "", "", "", "", "", ""),
		("BA","Mulungu do Morro","44885000","44889999","5","9", "", "", "", "", "", "", "", ""),
		("BA","Canarana","44890000","44891999","9","13", "", "", "", "", "", "", "", ""),
		("BA","Salobro (Canarana)","44892000","44894999","5","9", "", "", "", "", "", "", "", ""),
		("BA","Barro Alto","44895000","44899999","6","10", "", "", "", "", "", "", "", ""),
		("BA","Irecê","44900000","44904999","5","9", "", "", "", "", "", "", "", ""),
		("BA","Lapão","44905000","44909999","5","9", "", "", "", "", "", "", "", ""),
		("BA","América Dourada","44910000","44910999","5","9", "", "", "", "", "", "", "", ""),
		("BA","Belo Campo (América Dourada)","44911000","44914999","5","9", "", "", "", "", "", "", "", ""),
		("BA","São Gabriel","44915000","44919999","5","9", "", "", "", "", "", "", "", ""),
		("BA","João Dourado","44920000","44924999","5","9", "", "", "", "", "", "", "", ""),
		("BA","Jussara","44925000","44929999","5","9", "", "", "", "", "", "", "", ""),
		("BA","Presidente Dutra","44930000","44939999","5","9", "", "", "", "", "", "", "", ""),
		("BA","Central","44940000","44949999","5","9", "", "", "", "", "", "", "", ""),
		("BA","Uibaí","44950000","44959999","5","9", "", "", "", "", "", "", "", ""),
		("BA","Ibititá","44960000","44969999","5","9", "", "", "", "", "", "", "", ""),
		("BA","Ibipeba","44970000","44989999","5","9", "", "", "", "", "", "", "", ""),
		("BA","Barra do Mendes","44990000","44999999","5","9", "", "", "", "", "", "", "", ""),
		("BA","Vitória da Conquista","45000000","45099999","2","6", "", "", "", "", "", "", "", ""),
		("BA","Barra do Choça","45120000","45129999","9","13", "", "", "", "", "", "", "", ""),
		("BA","Caatiba","45130000","45139999","5","9", "", "", "", "", "", "", "", ""),
		("BA","Itambé","45140000","45149999","9","13", "", "", "", "", "", "", "", ""),
		("BA","Encruzilhada","45150000","45154999","5","9", "", "", "", "", "", "", "", ""),
		("BA","Ribeirão do Largo","45155000","45156999","5","9", "", "", "", "", "", "", "", ""),
		("BA","Cândido Sales","45157000","45159999","5","9", "", "", "", "", "", "", "", ""),
		("BA","Belo Campo","45160000","45169999","9","13", "", "", "", "", "", "", "", ""),
		("BA","Tremedal","45170000","45176999","5","9", "", "", "", "", "", "", "", ""),
		("BA","Caraíbas","45177000","45179999","9","13", "", "", "", "", "", "", "", ""),
		("BA","Anagé","45180000","45189999","5","9", "", "", "", "", "", "", "", ""),
		("BA","Planalto","45190000","45199999","5","9", "", "", "", "", "", "", "", ""),
		("BA","Jequié","45200000","45208999","2","6", "", "", "", "", "", "", "", ""),
		("BA","Lafaiete Coutinho","45215000","45219999","4","8", "", "", "", "", "", "", "", ""),
		("BA","Aiquara","45220000","45224999","4","8", "", "", "", "", "", "", "", ""),
		("BA","Jitaúna","45225000","45229999","3","7", "", "", "", "", "", "", "", ""),
		("BA","Itagi","45230000","45239999","3","7", "", "", "", "", "", "", "", ""),
		("BA","Manoel Vitorino","45240000","45249999","4","8", "", "", "", "", "", "", "", ""),
		("BA","Boa Nova","45250000","45254999","4","8", "", "", "", "", "", "", "", ""),
		("BA","Mirante","45255000","45259999","5","9", "", "", "", "", "", "", "", ""),
		("BA","Poções","45260000","45262999","5","9", "", "", "", "", "", "", "", ""),
		("BA","Bom Jesus da Serra","45263000","45264999","6","9", "", "", "", "", "", "", "", ""),
		("BA","Caetanos","45265000","45269999","5","9", "", "", "", "", "", "", "", ""),
		("BA","Nova Canaã","45270000","45279999","4","8", "", "", "", "", "", "", "", ""),
		("BA","Iguaí","45280000","45289999","4","8", "", "", "", "", "", "", "", ""),
		("BA","Ibicuí","45290000","45299999","4","8", "", "", "", "", "", "", "", ""),
		("BA","Amargosa","45300000","45304999","9","13", "", "", "", "", "", "", "", ""),
		("BA","Elísio Medrado","45305000","45309999","9","13", "", "", "", "", "", "", "", ""),
		("BA","Ubaíra","45310000","45314999","4","8", "", "", "", "", "", "", "", ""),
		("BA","Milagres","45315000","45319999","5","9", "", "", "", "", "", "", "", ""),
		("BA","Santa Inês","45320000","45324999","7","11", "", "", "", "", "", "", "", ""),
		("BA","Brejões","45325000","45329999","6","8", "", "", "", "", "", "", "", ""),
		("BA","Cravolândia","45330000","45339999","7","9", "", "", "", "", "", "", "", ""),
		("BA","Itaquara","45340000","45344999","3","7", "", "", "", "", "", "", "", ""),
		("BA","Jaguaquara","45345000","45349999","3","7", "", "", "", "", "", "", "", ""),
		("BA","Itiruçu","45350000","45354999","3","7", "", "", "", "", "", "", "", ""),
		("BA","Apuarema","45355000","45359999","4","8", "", "", "", "", "", "", "", ""),
		("BA","Maracás","45360000","45364999","4","8", "", "", "", "", "", "", "", ""),
		("BA","Lajedo do Tabocal","45365000","45369999","4","8", "", "", "", "", "", "", "", ""),
		("BA","Irajuba","45370000","45374999","4","8", "", "", "", "", "", "", "", ""),
		("BA","Planaltino","45375000","45389999","3","7", "", "", "", "", "", "", "", ""),
		("BA","Nova Itarana","45390000","45399999","5","9", "", "", "", "", "", "", "", ""),
		("BA","Valença","45400000","45415999","4","6", "", "", "", "", "", "", "", ""),
		("BA","Presidente Tancredo Neves","45416000","45419999","4","8", "", "", "", "", "", "", "", ""),
		("BA","Cairu","45420000","45429999","10","14", "", "", "", "", "", "", "", ""),
		("BA","Taperoá","45430000","45434999","6","10", "", "", "", "", "", "", "", ""),
		("BA","Ituberá","45435000","45435999","3","7", "", "", "", "", "", "", "", ""),
		("BA","Piraí do Norte","45436000","45439999","5","9", "", "", "", "", "", "", "", ""),
		("BA","Nilo Peçanha","45440000","45442999","6","10", "", "", "", "", "", "", "", ""),
		("BA","Igrapiúna","45443000","45444999","6","9", "", "", "", "", "", "", "", ""),
		("BA","Camamu","45445000","45449999","6","8", "", "", "", "", "", "", "", ""),
		("BA","Gandu","45450000","45451999","4","8", "", "", "", "", "", "", "", ""),
		("BA","Nova Ibiá","45452000","45454999","5","9", "", "", "", "", "", "", "", ""),
		("BA","Itamari","45455000","45459999","3","7", "", "", "", "", "", "", "", ""),
		("BA","Wenceslau Guimarães","45460000","45464999","5","9", "", "", "", "", "", "", "", ""),
		("BA","Teolândia","45465000","45469999","4","8", "", "", "", "", "", "", "", ""),
		("BA","Jequiriçá","45470000","45479999","4","8", "", "", "", "", "", "", "", ""),
		("BA","Mutuípe","45480000","45489999","6","10", "", "", "", "", "", "", "", ""),
		("BA","Laje","45490000","45499999","4","8", "", "", "", "", "", "", "", ""),
		("BA","Ibirapitanga","45500000","45519999","4","8", "", "", "", "", "", "", "", ""),
		("BA","Maraú","45520000","45529999","4","8", "", "", "", "", "", "", "", ""),
		("BA","Itacaré","45530000","45539999","4","8", "", "", "", "", "", "", "", ""),
		("BA","Gongogi","45540000","45544999","4","8", "", "", "", "", "", "", "", ""),
		("BA","Ubaitaba","45545000","45549999","4","8", "", "", "", "", "", "", "", ""),
		("BA","Ubatã","45550000","45559999","4","8", "", "", "", "", "", "", "", ""),
		("BA","Barra do Rocha","45560000","45569999","4","8", "", "", "", "", "", "", "", ""),
		("BA","Ipiaú","45570000","45579999","4","8", "", "", "", "", "", "", "", ""),
		("BA","Ibirataia","45580000","45584999","4","8", "", "", "", "", "", "", "", ""),
		("BA","Itagibá","45585000","45589999","3","7", "", "", "", "", "", "", "", ""),
		("BA","Dário Meira","45590000","45599999","4","8", "", "", "", "", "", "", "", ""),
		("BA","Itabuna","45600000","45609999","2","5", "", "", "", "", "", "", "", ""),
		("BA","Jussari","45610000","45614999","4","8", "", "", "", "", "", "", "", ""),
		("BA","Buerarema","45615000","45619999","7","11", "", "", "", "", "", "", "", ""),
		("BA","São José da Vitória","45620000","45624999","4","8", "", "", "", "", "", "", "", ""),
		("BA","Barro Preto","45625000","45629999","3","7", "", "", "", "", "", "", "", ""),
		("BA","Itajuípe","45630000","45637999","5","9", "", "", "", "", "", "", "", ""),
		("BA","Coaraci","45638000","45639999","4","8", "", "", "", "", "", "", "", ""),
		("BA","Almadina","45640000","45644999","4","8", "", "", "", "", "", "", "", ""),
		("BA","Itapitanga","45645000","45649999","4","8", "", "", "", "", "", "", "", ""),
		("BA","Ilhéus","45650000","45659999","2","7", "", "", "", "", "", "", "", ""),
		("BA","Aurelino Leal","45675000","45679999","4","8", "", "", "", "", "", "", "", ""),
		("BA","Uruçuca","45680000","45689999","8","12", "", "", "", "", "", "", "", ""),
		("BA","Una","45690000","45694999","4","8", "", "", "", "", "", "", "", ""),
		("BA","Arataca","45695000","45699999","4","8", "", "", "", "", "", "", "", ""),
		("BA","Itapetinga","45700000","45709999","9","13", "", "", "", "", "", "", "", ""),
		("BA","Itororó","45710000","45719999","9","13", "", "", "", "", "", "", "", ""),
		("BA","Firmino Alves","45720000","45724999","4","8", "", "", "", "", "", "", "", ""),
		("BA","Santa Cruz da Vitória","45725000","45729999","4","8", "", "", "", "", "", "", "", ""),
		("BA","Itaju do Colônia","45730000","45739999","5","9", "", "", "", "", "", "", "", ""),
		("BA","Floresta Azul","45740000","45744999","4","8", "", "", "", "", "", "", "", ""),
		("BA","Ibicaraí","45745000","45749999","4","8", "", "", "", "", "", "", "", ""),
		("BA","Itapé","45750000","45759999","5","9", "", "", "", "", "", "", "", ""),
		("BA","Macarani","45760000","45769999","5","9", "", "", "", "", "", "", "", ""),
		("BA","Maiquinique","45770000","45779999","6","10", "", "", "", "", "", "", "", ""),
		("BA","Itarantim","45780000","45789999","6","10", "", "", "", "", "", "", "", ""),
		("BA","Potiraguá","45790000","45799999","6","10", "", "", "", "", "", "", "", ""),
		("BA","Belmonte","45800000","45806999","6","10", "", "", "", "", "", "", "", ""),
		("BA","Santa Cruz Cabrália","45807000","45809999","5","9", "", "", "", "", "", "", "", ""),
		("BA","Porto Seguro","45810000","45817999","5","7", "", "", "", "", "", "", "", ""),
		("BA","Trancoso (Porto Seguro)","45818000","45818999","5","9", "", "", "", "", "", "", "", ""),
		("BA","Caraiva (Porto Seguro)","45819000","45819999","7","11", "", "", "", "", "", "", "", ""),
		("BA","Eunápolis","45820000","45828999","5","7", "", "", "", "", "", "", "", ""),
		("BA","Jucuruçu","45834000","45835999","6","10", "", "", "", "", "", "", "", ""),
		("BA","Itamaraju","45836000","45839999","6","9", "", "", "", "", "", "", "", ""),
		("BA","Guaratinga","45840000","45847999","5","9", "", "", "", "", "", "", "", ""),
		("BA","Itabela","45848000","45849999","7","9", "", "", "", "", "", "", "", ""),
		("BA","Itagimirim","45850000","45854999","5","9", "", "", "", "", "", "", "", ""),
		("BA","Itapebi","45855000","45859999","5","9", "", "", "", "", "", "", "", ""),
		("BA","Canavieiras","45860000","45864999","9","13", "", "", "", "", "", "", "", ""),
		("BA","Santa Luzia","45865000","45869999","8","12", "", "", "", "", "", "", "", ""),
		("BA","Mascote","45870000","45879999","5","9", "", "", "", "", "", "", "", ""),
		("BA","Camacan","45880000","45889999","9","13", "", "", "", "", "", "", "", ""),
		("BA","Pau Brasil","45890000","45899999","4","8", "", "", "", "", "", "", "", ""),
		("BA","Caravelas","45900000","45919999","6","9", "", "", "", "", "", "", "", ""),
		("BA","Nova Viçosa","45920000","45927999","6","9", "", "", "", "", "", "", "", ""),
		("BA","Posto da Mata (Nova Viçosa)","45928000","45929999","6","10", "", "", "", "", "", "", "", ""),
		("BA","Mucuri","45930000","45935999","6","9", "", "", "", "", "", "", "", ""),
		("BA","Itabatã (Mucuri)","45936000","45939999","6","10", "", "", "", "", "", "", "", ""),
		("BA","Ibirapuã","45940000","45949999","8","10", "", "", "", "", "", "", "", ""),
		("BA","Lajedão","45950000","45954999","8","10", "", "", "", "", "", "", "", ""),
		("BA","Vereda","45955000","45959999","8","10", "", "", "", "", "", "", "", ""),
		("BA","Medeiros Neto","45960000","45969999","6","9", "", "", "", "", "", "", "", ""),
		("BA","Itanhém","45970000","45979999","6","9", "", "", "", "", "", "", "", ""),
		("BA","Prado","45980000","45982999","6","9", "", "", "", "", "", "", "", ""),
		("BA","Cumuruxatiba (Prado)","45983000","45989999","6","10", "", "", "", "", "", "", "", "");
' );

$installer->endSetup();