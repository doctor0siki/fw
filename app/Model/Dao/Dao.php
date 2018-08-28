<?php
namespace Model\Dao;
use Doctrine\DBAL\Query\QueryBuilder;

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
abstract class Dao
{

    /**
     * @var \Doctrine\DBAL\Driver\PDOConnection $db DB接続用コンテナを格納
     */

    protected $db;

    /**
     * @var string _table_name 子クラスのテーブル名を格納します
     */

    private $_table_name;

    /**
     * Dao constructor.
     *
     * Dao のコンストラクタです。コネクションを格納し、子クラスのクラス名からテーブル名を指定します
     *
     * @copyright Ceres inc.
     * @author y-fukumoto <y-fukumoto@ceres-inc.jp>
     * @since 2018/08/28
     * @param object $db データベース
     */

    public function __construct($db)
    {
        //DBコネクションを格納
        $this->db = $db;

        //子クラスのファイル名を取得する
        $ref = get_class($this);

        // MODEL\DAO\CLASS から CLASS名のみを取得する
        $this->_table_name = pathinfo($ref)["basename"];

        //キャメルケースをスネークケースに変換
        $this->_table_name = preg_replace("/([A-Z])/", '_${1}', $this->_table_name);
        $this->_table_name = strtolower(preg_replace("/^_/", '', $this->_table_name));

    }

    /**
     * select Function
     *
     *
     *
     * @copyright Ceres inc.
     * @author y-fukumoto <y-fukumoto@ceres-inc.jp>
     * @since 2018/08/28
     * @param array $param
     */
    public function select(array $param)
    {

    }

    /**
     * insert Function
     *
     *
     *
     * @copyright Ceres inc.
     * @author y-fukumoto <y-fukumoto@ceres-inc.jp>
     * @since 2018/08/28
     * @param array $param
     */
    public function insert(array $param)
    {

    }

    /**
     * update Function
     *
     *
     *
     * @copyright Ceres inc.
     * @author y-fukumoto <y-fukumoto@ceres-inc.jp>
     * @since 2018/08/28
     * @param array $param
     */
    public function update(array $param)
    {

    }

    /**
     * delete Function
     *
     *
     *
     * @copyright Ceres inc.
     * @author y-fukumoto <y-fukumoto@ceres-inc.jp>
     * @since 2018/08/28
     * @param array $param
     */

    public function delete(array $param)
    {

    }

}