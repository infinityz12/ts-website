+<?php
 +/*
 + * Portuguese BR language for ts-website
 + * @copy Wruczek <wruczekk@gmail.com>
 + */
 +
 +$lang = array();
 +
 +/************* General *************/
 +
 +$lang["general"]["langcode"] = "pt_BR";
 +$lang["general"]["scripterror"] = "Ocorreu um erro! {0}: {1}";
 +
 +/************* Navbar *************/
 +
 +$lang["navbar"]["navigation"] = "Navegação";
 +
 +$lang["navbar"]["viewer"] = "Visualizador de Servidor";
 +$lang["navbar"]["bans"] = "Lista de banidos";
 +$lang["navbar"]["rules"] = "Regras do servidor";
 +
 +$lang["navbar"]["connect"] = "Conectar ao servidorr";
 +$lang["navbar"]["connecttooltip"] = "Clique para conectar-se {0}";
 +
 +
 +/************* Footer *************/
 +
 +$lang["footer"]["website"] = "Site";
 +$lang["footer"]["css"] = "CSS graças a cortesia de";
 +$lang["footer"]["background"] = "background";
 +
 +
 +/************* Server status *************/
 +
 +$lang["serverstatus"]["title"] = "Status do servidor";
 +$lang["serverstatus"]["address"] = "Endereço";
 +$lang["serverstatus"]["loading"] = "Carregando...";
 +
 +$lang["serverstatus"]["online"] = "Online";
 +$lang["serverstatus"]["offline"] = "Offline";
 +$lang["serverstatus"]["uptime"] = "Uptime";
 +$lang["serverstatus"]["version"] = "Versão";
 +$lang["serverstatus"]["avgping"] = "Média de ping";
 +$lang["serverstatus"]["avgpl"] = "Perda média de pacotes";
 +
 +
 +/************* Admin list *************/
 +
 +$lang["adminlist"]["title"] = "Lista de admin";
 +$lang["adminlist"]["emptygroup"] = "Este grupo está vazio";
 +$lang["adminlist"]["status"]["online"] = "Online";
 +$lang["adminlist"]["status"]["away"] = "Ausente";
 +$lang["adminlist"]["status"]["offline"] = "Offline";
 +$lang["adminlist"]["lastupdate"] = "Última atualização: {0}";
 +
 +
 +/************* Server viewer promo box (under adminlist and contact) *************/
 +
 +$lang["svpb"]["title"] = "Visualizador de servidor";
 +$lang["svpb"]["takealook"] = "Dê uma olhada &raquo;";
 +
 +
 +/************************************/
 +/************* SUBPAGES *************/
 +/************************************/
 +
 +
 +/************* News - index.php *************/
 +
 +$lang["index"]["title"] = "Novidades";
 +$lang["index"]["showmore"] = "Mostre mais";
 +$lang["index"]["showless"] = "Mostre menos";
 +
 +$lang["index"]["errortitle"] = "Erro: Diretório de notícias não foi encontrado!";
 +$lang["index"]["errorsubtitle"] = "Certifique-se de que a localização do diretório definido em <code>config/config.php</code> é valida.";
 +
 +
 +/************* Server viewer - viewer.php *************/
 +
 +$lang["viewer"]["title"] = "Visualizador de Servidor";
 +$lang["viewer"]["lastupdate"] = "Última atualização: {0}";
 +
 +
 +/************* Ban List - bans.php *************/
 +
 +$lang["banlist"]["title"] = "Lista de banidos";
 +$lang["banlist"]["datatablesurl"] = "//cdn.datatables.net/plug-ins/1.10.12/i18n/Portuguese-Brasil.json";
 +$lang["banlist"]["emptylist"] = "Lista de banidos está vazia";
 +$lang["banlist"]["lastupdate"] = "Ultima atualização: {0}";
 +
 +$lang["banlist"]["table"]["emptyreason"] = "(Nenhuma motivo definida)";
 +$lang["banlist"]["table"]["permaban"] = "Nunca";
 +
 +$lang["banlist"]["table"]["nickname"] = "Nick";
 +$lang["banlist"]["table"]["reason"] = "Motivo";
 +$lang["banlist"]["table"]["bannedby"] = "Banido por";
 +$lang["banlist"]["table"]["bandate"] = "Data de banimento";
 +$lang["banlist"]["table"]["expires"] = "Expira";
 +
 +/************* Rules - rules.php *************/
 +
 +$lang["rules"]["title"] = "Regras do servidor";
 +$lang["rules"]["filenotfound"] = "Erro: Arquivo <code>config/rules.md</code> não foi encontrado!";
 +$lang["rules"]["readerror"] = "Erro: Não pode acessar o arquivo <code>config/rules.md</code>!";
