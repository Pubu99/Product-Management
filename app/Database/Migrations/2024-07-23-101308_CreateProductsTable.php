public function up()
{
    $this->forge->addField([
        'id'          => [
            'type'           => 'INT',
            'constraint'     => 5,
            'unsigned'       => true,
            'auto_increment' => true,
        ],
        'name'       => [
            'type'       => 'VARCHAR',
            'constraint' => '100',
        ],
        'description' => [
            'type' => 'TEXT',
            'null' => true,
        ],
        'date'       => [
            'type' => 'DATE',
        ],
        'price'      => [
            'type' => 'DECIMAL',
            'constraint' => '10,2',
        ],
        'created_at' => [
            'type' => 'DATETIME',
            'null' => true,
        ],
        'updated_at' => [
            'type' => 'DATETIME',
            'null' => true,
        ],
        'deleted_at' => [
            'type' => 'DATETIME',
            'null' => true,
        ],
    ]);
    $this->forge->addKey('id', true);
    $this->forge->createTable('products');
}
