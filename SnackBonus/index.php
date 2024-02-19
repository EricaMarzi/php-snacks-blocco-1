<!--Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.-->

<?php 

$text = 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facilis suscipit recusandae praesentium voluptatem
mollitia, minus reprehenderit, eum dignissimos, explicabo excepturi aliquid quis id officia ullam consequatur
adipisci tenetur odit saepe.
Iure magni nulla quidem animi, dignissimos tempore, fugit nostrum blanditiis labore accusantium dolorum corrupti
explicabo at? Assumenda omnis eius quibusdam vero dicta, quaerat ipsam laborum blanditiis, inventore excepturi,
vitae dolor.
Possimus impedit dolorem reiciendis iure. Accusantium nesciunt cumque quae vero amet neque aperiam? Nobis modi
rem, distinctio nisi blanditiis numquam vitae voluptatem eius hic dolorem deserunt, quidem reiciendis
consequuntur perferendis!
Necessitatibus laudantium deserunt, sint expedita ipsa alias quod voluptate modi voluptatum molestias
perferendis sed reprehenderit, dolorem et rerum aspernatur provident molestiae ipsam atque, fugit ut voluptatem
quibusdam. Dicta, iste similique.
Amet corrupti repellendus harum fugiat sequi, enim, iure vero veritatis laudantium esse odio nulla cupiditate,
fugit ut temporibus voluptatibus! Quibusdam, delectus! In officiis libero vitae unde tempore perferendis ex
laboriosam?
Eius, ipsam! Quas corrupti aperiam saepe earum, quibusdam minus tenetur voluptatum mollitia, possimus,
perspiciatis voluptatibus et officiis soluta nihil ea inventore. Consequuntur expedita eaque incidunt
perferendis libero qui autem fuga.
Soluta libero facilis esse beatae ullam, rem laboriosam aliquam pariatur ipsam dolore optio reprehenderit fugiat
eveniet dolor fugit in architecto accusamus est totam aliquid quaerat consectetur placeat. Accusantium, in a.
In, sunt aut! Vel error adipisci exercitationem doloremque consequuntur similique molestiae architecto, amet et
voluptatibus expedita laudantium asperiores perspiciatis? Fugiat adipisci libero veritatis suscipit asperiores
inventore nisi dignissimos quam commodi.
Excepturi consectetur id provident officiis ipsum, omnis voluptas, sed molestias explicabo soluta perferendis
sint ab at vel harum voluptate fugit non facere tenetur commodi sapiente deleniti? Atque ipsa fuga quia.
Dicta illum corrupti doloremque adipisci ut esse soluta facilis placeat ad, tenetur, amet cumque impedit vitae!
Architecto ex voluptatibus ullam, voluptate dolorum quasi, sed illum maiores eum corrupti, praesentium adipisci!';

$paragraph = explode('.', $text);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack Bonus</title>
</head>
<body>
<h1>Paragraph</h1>
        <?php foreach ($paragraph as $phrase) : ?>
            <p> <?= $phrase ?> </p>
        <?php endforeach ?>
</body>
</html>