<?php

namespace App\Http\Controllers\DTO;

/**
 * Class CommentDTO
 *
 * @author A. Suvorkin
 */
class CommentDTO
{
    /**
     * @var int Идентификатор пользователя.
     */
    private $userId;

    /**
     * @var string Заголовок.
     */
    private $title;

    /**
     * @var string Комментарий.
     */
    private $comment;

    /**
     * CommentDTO constructor.
     * @param int $userId
     * @param string $comment
     */
    public function __construct(int $userId, string $comment)
    {
        $this->userId = $userId;
        $this->comment = $comment;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getComment(): string
    {
        return $this->comment;
    }

    /**
     * @return int
     */
    public function getUserId(): int
    {
        return $this->userId;
    }

    /**
     * @param string $comment
     */
    public function setComment(string $comment): void
    {
        $this->comment = $comment;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * @param int $userId
     */
    public function setUserId(int $userId): void
    {
        $this->userId = $userId;
    }
}
