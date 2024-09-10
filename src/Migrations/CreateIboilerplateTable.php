<?php
class CreateIboilerplateTable
{
    public function up(PDO $pdo)
    {
        $pdo->exec("CREATE");
    }

    public function down(PDO $pdo)
    {
        $pdo->exec("DROP");
    }
}
