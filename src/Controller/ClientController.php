<?php

namespace App\Controller;


use App\Entity\Client;
use App\Repository\ClientRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\Normalizer\AbstractObjectNormalizer;
use Symfony\Component\Serializer\SerializerInterface;


class ClientController extends AbstractController
{
    #[Route('/api/clients', name: 'api_client_show')]
    public function getClient(SerializerInterface $serializer, ClientRepository $client): Response
    {
        $clientDb = $client->findAll();

        $jsonContent = $serializer->serialize($clientDb, 'json');


       return new JsonResponse(json_decode($jsonContent));
    }
}
 