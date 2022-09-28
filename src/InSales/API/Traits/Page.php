<?php

namespace InSales\API\Traits;

use InSales\API\ApiResponse;

/**
 * Trait Page Часть API-клиента, отвечающая за Страницы
 * @package InSales\Traits
 * @mixin \InSales\API\ApiClient
 */
trait Page
{
    /**
     * Получение страницы
     * @param int $id Идентификатор страницы
     * @return ApiResponse
     */
    public function getPage(int $id) : ApiResponse
    {
        return $this->client->executeGetRequest(
            $this->generateUrl(self::API_URL_PAGES, $id),
            $id
        );
    }

    /**
     * Получение страниц
     * @return ApiResponse
     */
    public function getPages() : ApiResponse
    {
        return $this->client->executeListRequest($this->generateUrl(self::API_URL_PAGES));
    }

    /**
     * Удаление страницы
     * @param int $id Идентификатор страницы
     * @return ApiResponse
     */
    public function removePage(int $id) : ApiResponse
    {
        return $this->client->executeRemoveRequest(
            $this->generateUrl(self::API_URL_PAGES, $id),
            $id
        );
    }

    /**
     * Обновление страницы
     * @param int $id Идентификатор страницы
     * @param array $data Массив данных
     * @return ApiResponse
     */
    public function updatePage(int $id, array $data) : ApiResponse
    {
        return $this->client->executeUpdateRequest(
            $this->generateUrl(self::API_URL_PAGES, $id),
            $data
        );
    }

    /**
     * Создание страницы
     * @param array $data
     * @return ApiResponse
     */
    public function createPage(array $data) : ApiResponse
    {
        return $this->client->executeCreateRequest(
            $this->generateUrl(self::API_URL_PAGES),
            $data
        );
    }
}
