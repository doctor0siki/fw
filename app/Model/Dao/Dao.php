<?php
namespace Model\Dao;

/**
 * Class Dao
 *
 * DB接続用の Classです
 *
 * 利用するには、
 * 1.src/settings.phpにDB接続情報を指定
 * 2.src/dependencies.phpにDB接続用のコンテナを作成
 * をしておきます。
 * @copyright Ceres inc.
 * @author y-fukumoto <y-fukumoto@ceres-inc.jp>
 * @since 2018/06/15
 */

class Dao
{

    /**
     * @var \Doctrine\DBAL\Driver\PDOConnection $db DB接続用コンテナを格納
     */
    protected $db;

    /**
     * Mapper constructor.
     *
     * Mapper のコンストラクタです
     *
     * @copyright Ceres inc.
     * @author y-fukumoto <y-fukumoto@ceres-inc.jp>
     * @since 2018/06/15
     * @param object $db コンテナを指定する
     */
    public function __construct($db)
    {
        $this->db = $db;
    }
}