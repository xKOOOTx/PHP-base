
<?foreach ($goods as $good): ?>
<div>
    <a href="/catalog/item/<?=$good["id"]?>">
    <b><?=$good['name']?></b><br>
    <img width="150" src="/img/<?=$good['image']?>" alt=""></a><br>
    Цена: <?=$good['price']?><br>
    <button id="<?=$good["id"]?>">Купить</button><hr>
</div>
<? endforeach; ?>
