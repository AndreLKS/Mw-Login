<?php

namespace App\Entity\APT;

use App\Repository\APT\SessionsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SessionsRepository::class)
 */
class Sessions
{

    /**
     * @ORM\Id
     * @ORM\Column(type="string", length=128, nullable=true)
     */
    private $sess_id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $sess_data;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $sess_lifetime;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $sess_time;


    public function getSessId(): ?string
    {
        return $this->sess_id;
    }

    public function setSessId(?string $sess_id): self
    {
        $this->sess_id = $sess_id;

        return $this;
    }

    public function getSessData(): ?string
    {
        return $this->sess_data;
    }

    public function setSessData(string $sess_data): self
    {
        $this->sess_data = $sess_data;

        return $this;
    }

    public function getSessLifetime(): ?int
    {
        return $this->sess_lifetime;
    }

    public function setSessLifetime(?int $sess_lifetime): self
    {
        $this->sess_lifetime = $sess_lifetime;

        return $this;
    }

    public function getSessTime(): ?int
    {
        return $this->sess_time;
    }

    public function setSessTime(?int $sess_time): self
    {
        $this->sess_time = $sess_time;

        return $this;
    }
}
