<?php

namespace Todos\Entity;

use Doctrine\ORM\Mapping as ORM;
use DoctrineModule\Stdlib\Hydrator\DoctrineObject as DoctrineHydrator;


/**
 * Todos
 *
 * @ORM\Table(name="todos")
 * @ORM\Entity(repositoryClass="Todos\Entity\Repository\TodosRepository")
 */
class Todo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datacreazione", type="date", nullable=false)
     */
    private $datacreazione;

    /**
     * @var string
     *
     * @ORM\Column(name="cliente", type="text", length=255, nullable=false)
     */
    private $cliente;

    /**
     * @var string
     *
     * @ORM\Column(name="lavoro", type="text", nullable=false)
     */
    private $lavoro;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dataconsegna", type="date", nullable=true)
     */
    private $dataconsegna;

    /**
     * @var string
     *
     * @ORM\Column(name="mail", type="text", length=255, nullable=true)
     */
    private $mail;

    /**
     * @var string
     *
     * @ORM\Column(name="telefono", type="text", length=255, nullable=true)
     */
    private $telefono;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="oraconsegna", type="time", nullable=true)
     */
    private $oraconsegna;

    /**
     * @var string
     *
     * @ORM\Column(name="referente", type="text", length=255, nullable=true)
     */
    private $referente;

    /**
     * @var string
     *
     * @ORM\Column(name="note", type="text", length=65535, nullable=true)
     */
    private $note;


    public function __construct($datacreazione, $cliente, $lavoro, $dataconsegna, $mail, $telefono, $priorita, $referente, $note) {
            $this->datacreazione = $datacreazione;
            $this->cliente = $cliente;
            $this->lavoro = $lavoro;
            $this->dataconsegna = $dataconsegna;
            $this->mail = $mail;
            $this->telefono = $telefono;
            $this->oraconsegna = $oraconsegna;
            $this->referente = $referente;
            $this->note = $note;

        }

        public function toArray()
  {
      return [
          'datacreazione' => $this->datacreazione,
          'cliente' => $this->cliente,
          'lavoro' => $this->lavoro,
          'dataconsegna' => $this->dataconsegna,
          'mail' => $this->mail,
          'telefono' => $this->telefono,
          'oraconsegna' => $this->oraconsegna,
          'referente' => $this->referente,
          'note' => $this->note,

      ];
  }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set datacreazione
     *
     * @param \DateTime $datacreazione
     *
     * @return Todo
     */
    public function setDatacreazione($datacreazione)
    {
//        $this->datacreazione = $datacreazione;
          $this->datacreazione = new \DateTime($datacreazione);

        return $this;
    }

    /**
     * Get datacreazione
     *
     * @return \DateTime
     */
    public function getDatacreazione()
    {
        return $this->datacreazione;
    }

    /**
     * Set cliente
     *
     * @param string $cliente
     *
     * @return Todo
     */
    public function setCliente($cliente)
    {
        $this->cliente = $cliente;

        return $this;
    }

    /**
     * Get cliente
     *
     * @return string
     */
    public function getCliente()
    {
        return $this->cliente;
    }

    /**
     * Set lavoro
     *
     * @param string $lavoro
     *
     * @return Todo
     */
    public function setLavoro($lavoro)
    {
        $this->lavoro = $lavoro;

        return $this;
    }

    /**
     * Get lavoro
     *
     * @return string
     */
    public function getLavoro()
    {
        return $this->lavoro;
    }

    /**
     * Set dataconsegna
     *
     * @param \DateTime $dataconsegna
     *
     * @return Todo
     */
    public function setDataconsegna($dataconsegna)
    {
//        $this->dataconsegna = $dataconsegna;
        $this->dataconsegna = new \DateTime($dataconsegna);

        return $this;
    }

    /**
     * Get dataconsegna
     *
     * @return \DateTime
     */
    public function getDataconsegna()
    {
        return $this->dataconsegna;
    }

    /**
     * Set mail
     *
     * @param string $mail
     *
     * @return Todo
     */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get mail
     *
     * @return string
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     *
     * @return Todo
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono
     *
     * @return string
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set oraconsegna
     *
     * @param \DateTime $oraconsegna
     *
     * @return Todo
     */
    public function setOraconsegna($oraconsegna)
    {
        $this->oraconsegna = new \DateTime ($oraconsegna);

        return $this;
    }

    /**
     * Get oraconsegna
     *
     * @return \DateTime
     */
    public function getOraconsegna()
    {
        return $this->oraconsegna;
    }

    /**
     * Set referente
     *
     * @param string $referente
     *
     * @return Todo
     */
    public function setReferente($referente)
    {
        $this->referente = $referente;

        return $this;
    }

    /**
     * Get referente
     *
     * @return string
     */
    public function getReferente()
    {
        return $this->referente;
    }

    /**
     * Set note
     *
     * @param string $note
     *
     * @return Todo
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return string
     */
    public function getNote()
    {
        return $this->note;
    }
}
