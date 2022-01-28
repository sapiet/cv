<?php

namespace App\Entity;

use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ProfileRepository")
 */
class Profile
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $firstname;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $lastname;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $address;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $zipcode;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $city;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $mobile;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $website;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $profession;

    /**
     * @ORM\Column(type="text")
     */
    private $shortDescription;

    /**
     * @ORM\Column(type="text")
     */
    private $longDescription;

    /**
     * @ORM\OneToMany(targetEntity="Social", mappedBy="profile")
     */
    private $socials;

    /**
     * @ORM\OneToMany(targetEntity="Experience", mappedBy="profile")
     */
    private $experiences;

    /**
     * @ORM\OneToMany(targetEntity="Formation", mappedBy="profile")
     */
    private $formations;

    /**
     * @ORM\OneToMany(targetEntity="Skill", mappedBy="profile")
     */
    private $skills;

    /**
     * @ORM\OneToMany(targetEntity="Work", mappedBy="profile")
     */
    private $works;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Recommendation", mappedBy="profile")
     */
    private $recommendations;

    public function __construct()
    {
        $this->socials = new ArrayCollection();
        $this->experiences = new ArrayCollection();
        $this->formations = new ArrayCollection();
        $this->skills = new ArrayCollection();
        $this->works = new ArrayCollection();
        $this->recommendations = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    public function setFirstname(string $firstname): self
    {
        $this->firstname = $firstname;

        return $this;
    }

    public function getLastname(): ?string
    {
        return $this->lastname;
    }

    public function setLastname(string $lastname): self
    {
        $this->lastname = $lastname;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(string $address): self
    {
        $this->address = $address;

        return $this;
    }

    public function getZipcode(): ?string
    {
        return $this->zipcode;
    }

    public function setZipcode(string $zipcode): self
    {
        $this->zipcode = $zipcode;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(string $city): self
    {
        $this->city = $city;

        return $this;
    }

    public function getMobile(): ?string
    {
        return $this->mobile;
    }

    public function setMobile(string $mobile): self
    {
        $this->mobile = $mobile;

        return $this;
    }

    public function getWebsite(): ?string
    {
        return $this->website;
    }

    public function setWebsite(?string $website): self
    {
        $this->website = $website;

        return $this;
    }

    public function getProfession(): ?string
    {
        return $this->profession;
    }

    public function setProfession(string $profession): self
    {
        $this->profession = $profession;

        return $this;
    }

    public function getShortDescription(): ?string
    {
        return $this->shortDescription;
    }

    public function setShortDescription(string $shortDescription): self
    {
        $this->shortDescription = $shortDescription;

        return $this;
    }

    public function getLongDescription(): ?string
    {
        return $this->longDescription;
    }

    public function setLongDescription(string $longDescription): self
    {
        $this->longDescription = $longDescription;

        return $this;
    }

    public function getSocials()
    {
        return $this->socials;
    }

    public function addSocial(Social $social): ?string
    {
        return $this->socials->add($social);
    }

    public function setSocials($socials): self
    {
        $this->socials = $socials;

        return $this;
    }

    // Custom functions

    public function getFullname(): ?string
    {
        return $this->firstname.' '.$this->lastname;
    }

    /**
     * @return mixed
     */
    public function getExperiences()
    {
        return $this->experiences;
    }

    /**
     * @param mixed $experiences
     *
     * @return self
     */
    public function setExperiences($experiences)
    {
        $this->experiences = $experiences;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getFormations()
    {
        return $this->formations;
    }

    /**
     * @param mixed $formations
     *
     * @return self
     */
    public function setFormations($formations)
    {
        $this->formations = $formations;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSkills()
    {
        return $this->skills;
    }

    /**
     * @param mixed $skills
     *
     * @return self
     */
    public function setSkills($skills)
    {
        $this->skills = $skills;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getWorks()
    {
        return $this->works;
    }

    /**
     * @param mixed $works
     *
     * @return self
     */
    public function setWorks($works)
    {
        $this->works = $works;

        return $this;
    }

    /**
     * @return string
     */
    public function getPicturePath(): string
    {
        return 'assets/images/profile.jpg';
    }

    /**
     * @return array
     */
    public function getSplittedHardSkills(): array
    {
        $hardSkills = $this->getHardSkills();
        return array_chunk($hardSkills, ceil(count($hardSkills) / 2));
    }

    /**
     * @return array
     */
    public function getHardSkillsByCategories(): array
    {
        $list = [];

        foreach ($this->getHardSkills() as $skill) {
            if (false === array_key_exists($skill->getCategory(), $list)) {
                $list[$skill->getCategory()] = [
                    'category' => $skill->getCategory(),
                    'items' => []
                ];
            }

            $list[$skill->getCategory()]['items'][] = $skill;
        }

        return $list;
    }

    /**
     * @return Skill[]
     */
    public function getHardSkills(): array
    {
        return $this->getSkillsByType(Skill::HARD);
    }

    /**
     * @return Skill[]
     */
    public function getSoftSkills(): array
    {
        return $this->getSkillsByType(Skill::SOFT);
    }

    /**
     * @return Skill[]
     */
    public function getSkillsByType(string $type): array
    {
        return array_filter($this->skills->toArray(), function(Skill $skill) use ($type): bool {
            return $type === $skill->getType();
        });
    }

    /**
     * @return Collection|Recommendation[]
     */
    public function getRecommendations(): Collection
    {
        return $this->recommendations;
    }

    public function addRecommendation(Recommendation $recommendation): self
    {
        if (!$this->recommendations->contains($recommendation)) {
            $this->recommendations[] = $recommendation;
            $recommendation->setProfile($this);
        }

        return $this;
    }

    public function removeRecommendation(Recommendation $recommendation): self
    {
        if ($this->recommendations->contains($recommendation)) {
            $this->recommendations->removeElement($recommendation);
            // set the owning side to null (unless already changed)
            if ($recommendation->getProfile() === $this) {
                $recommendation->setProfile(null);
            }
        }

        return $this;
    }
}
