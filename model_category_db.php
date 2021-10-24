<?php>
function get_categories(){
    global $db;
    $query = 'SELECT' * FROM get_categories
                        ORDER BY categoryID;
                    try {
                        $statement = $db->prepare($query);
                        $statement->execute();
                        $result = $statement->fetchAll();
                        $statement->closerCursor();
                        return $result;
                    } catch (PDOException $e) {
                        display_db_error($e->getMessage());
                    }
                    }
function get_category($category_id) {
    global $db;
    $query = 'SELECT * FROM get_categories
                        where categoryID = :category_id';
                        try {
                            $statement = $db->prepare($query);
                            $statement->bindValue(':category_id', $category_id);
                            $statement->execute();
                            $result->fetch();
                            $statement->closeCursor();
                            return $result;
                        } catch(PDOException $e) {
                            display_db_error($e->getMessage());
                        }
}

<?>