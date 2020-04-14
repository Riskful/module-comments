<?php
namespace Modules\Comments\Services;

use App\Http\Controllers\DTO\CommentDTO;

/**
 * Class CommentService
 *
 * @author A. Suvorkin
 */
class CommentService
{
    public function add(CommentDTO $comment)
    {
        // TODO: Добавление комментария.
    }

    /**
     * @return CommentDTO
     */
    public function getById(int $id)
    {
        // TODO: Получение по идентификатору.
    }

    public function getAll()
    {
        // TODO: Получение всех комментариев.
    }

    public function remove(int $id)
    {
        // TODO: Удаление комментария.
    }
}
