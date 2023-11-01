
<div class="sdg" id="sdg<?=$row['id']?>" style="background: <?=$row[' color']?>">
    <img class="sdg-img" src="<?=$row['img']?>"></img>
</div>

<div class="modal" id="modal-sdg<?=$row['id']?>">
    <button type="button" id="backbtn">
        Back!
    </button>

    <h2><?=$row["title"]?></h2>
    <p><?=$row["about"]?><p>
</div>