<?php

namespace Enaylal;

use DateTime;
use PDO;
use PDOStatement;

/**
 * Class Connection
 *
 * Classe permettant l'amélioration de certaines partie de PDO
 *
 * @package PHQ\Database
 */
class Connection extends PDO
{

    const TYPE_FIELD = [
        'integer' => parent::PARAM_INT,
        'boolean' => parent::PARAM_BOOL
    ];

    /**
     * Connection constructor.
     * @param string $dsn
     * @param string $username
     * @param string $passwd
     * @param array $options
     */
    public function __construct($dsn, $username = '', $passwd = '', $options = [])
    {
        parent::__construct($dsn, $username, $passwd, $options);
        parent::setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    }

    /**
     * Amélioration de la fonction query de PDO
     *
     * @param string|PDOStatement $statement
     * @param array $params
     * @return PDOStatement|void
     */
    public function query($statement, $params = [])
    {
        if (is_string($statement)) {
            $statement = $this->prepare($statement);
        }

        foreach ($params as $name => $param) {
            $paramType = gettype($param);
            $bindType = parent::PARAM_STR;

            if ($param instanceof DateTime) {
                $param = $param->format('Y-m-d H:i:s');
            } elseif (array_key_exists($paramType, self::TYPE_FIELD)) {
                $bindType = self::TYPE_FIELD[$paramType];
            } elseif ($param === null) {
                $bindType = parent::PARAM_NULL;
            }

            $statement->bindValue($name, $param, $bindType);
        }

        $statement->execute();
        return $statement;
    }

}
