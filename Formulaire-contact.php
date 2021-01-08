<h1 style="text-align: center">Fiche Contact</h1>
<form method="post" action="cible.php">
<section>
    <div class=2 style="text-align: center">
        <p>Photo</p>
        <input type="file">
    </div>
</section>

<section>
    <div style="text-align: center">
        <p>Adresse postale</p>
        <input type="text" placeholder="Adresse" name="text">
    </div>
    <div style="text-align: center">
        <input type="text" placeholder="Région/Département" name="text">
    </div>
    <div style="text-align: center">
    <input type="text" placeholder="Commune" name="text">
    </div>
    <div style="text-align: center">
    <input type="text" placeholder="Code Postal" name="text">
    </div>
</section>

<section>
<div style="text-align: center">
    <p>Numéros de téléphone</p>
    <input type="text" placeholder="Téléphone mobile" name="text"><br>
    <input type="text" placeholder="Téléphone fixe" name="text">
</div>
</section>

<section style="text-align: center">
    <p>Commentaires contact</p>
    <p>Date/ Lieu/ Commentaire</p>
    <input type="date"><br>
    <input type="text" placeholder="Lieu" name="text"><br>
    <textarea name="text"></textarea>
</section>
</form>