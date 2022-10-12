<?php

namespace InSales\API\Traits;

use InSales\API\ApiResponse;

/**
 * Trait File Часть API-клиента, отвечающая за файлы
 * @package InSales\Traits
 * @mixin \InSales\API\ApiClient
 */
trait File
{
    /**
     * Создание файла
     * @param array $data
     * @return ApiResponse
     */
    public function createFile(array $data) : ApiResponse
    {
        return $this->client->executeCreateRequest(
            $this->generateUrl(self::API_URL_FILES),
            $data
        );
    }

    /**
     * Удалить файл
     * @param int $id
     * @return ApiResponse
     */
    public function removeFile(int $id) : ApiResponse
    {
        return $this->client->executeRemoveRequest(
            $this->generateUrl(self::API_URL_FILES, $id),
            $id
        );
    }

    /**
     * Получение файла
     * @param int $id
     * @return ApiResponse
     */
    public function getFile(int $id) : ApiResponse
    {
        return $this->client->executeGetRequest(
            $this->generateUrl(self::API_URL_FILES, $id),
            $id
        );
    }

    /**
     * Получение списка файлов
     * @param array $params Параметры запроса
     * @return ApiResponse
     */
    public function getFiles($params = []) : ApiResponse
    {
        return $this->client->executeListRequest(
            $this->generateUrl(self::API_URL_FILES),
            $params
        );
    }

    /**
     * Обновление файла
     * @param int $id
     * @param array $data
     * @return ApiResponse
     */
    public function updateFile(int $id, array $data) : ApiResponse
    {
        return $this->client->executeUpdateRequest(
            $this->generateUrl(self::API_URL_FILES, $id),
            $data
        );
    }
}
