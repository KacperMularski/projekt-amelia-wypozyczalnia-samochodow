{extends file="main_admin.tpl"}

{block name=end}Wszelkie prawa zastrzeżone!{/block}

{block name=menu}

    <li><a href="{$conf->action_url}adminUzytkownicyPage">Użytkownicy</a></li>
    <li class="current"><a href="{$conf->action_url}adminWypozyczeniaPage">Wypożyczenia</a></li>
    <li><a href="{$conf->action_url}adminSamochodyPage">Samochody</a></li>
    <li><a href="{$conf->action_url}adminPracownicyPage">Pracownicy</a></li>
     
{/block}

{block name=content}



{/block}