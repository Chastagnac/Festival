<!DOCTYPE html>
<form action="?uc=creerGroupe&action=" method="POST">
    <select name="groupe">

        <h1>Créer votre groupe  ! </h1>

        <tr class="lignecreergroupe">
            <td> Nom : </td>
            <td><input type="text" name="nom" size="50"
                       maxlength="45"></td>
        </tr>

        <tr class="lignecreergroupe">
            <td> Responsable : </td>
            <td><input type="text" name="responsable" size="50"
                       maxlength="45"></td>
        </tr>

        <tr class="lignecreergroupe">
            <td> Adresse : </td>
            <td><input type="text" name="adresse" size="50"
                       maxlength="45"></td>
        </tr>

        <tr class="lignecreergroupe">
            <td> Pays : </td>
            <td><input type="text" name="pays" size="50"
                       maxlength="45"></td>
        </tr>

        <tr class="lignecreergroupe">
            <td> Nombre de personnes : </td>
            <td><input type="number" name="nb personnes" size="50"
                       maxlength="45"></td>
        </tr>

        <tr class="lignecreergroupe">
            <td> Hébergement (o/n) : </td>
            <td><input type="radio" name="herbergement" value="1" checked
                       maxlength="45"></td>
        </tr>

        <tr class="lignecreergroupe">
            <td> Email : </td>
            <td><input type="email" name="mail" size="50"
                       maxlength="45"></td>
        </tr>
    </select>
    <input type="submit" value=<?php $creerGroupe ?>>
</form>



