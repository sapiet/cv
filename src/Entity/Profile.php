<?php

namespace App\Entity;

use App\Repository\ProfileRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProfileRepository::class)]
class Profile
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $firstname;

    #[ORM\Column(type: 'string', length: 255)]
    private $lastname;

    #[ORM\Column(type: 'string', length: 255)]
    private $email;

    #[ORM\Column(type: 'string', length: 255)]
    private $address;

    #[ORM\Column(type: 'string', length: 10)]
    private $zipcode;

    #[ORM\Column(type: 'string', length: 255)]
    private $city;

    #[ORM\Column(type: 'string', length: 10)]
    private $mobile;

    #[ORM\Column(type: 'string', length: 255)]
    private $website;

    #[ORM\Column(type: 'string', length: 255)]
    private $profession;

    #[ORM\Column(type: 'text')]
    private $shortDescription;

    #[ORM\Column(type: 'text')]
    private $longDescription;

    #[ORM\OneToMany(mappedBy: 'profile', targetEntity: Experience::class)]
    private $experiences;

    #[ORM\OneToMany(mappedBy: 'profile', targetEntity: Formation::class)]
    private $formations;

    #[ORM\OneToMany(mappedBy: 'profile', targetEntity: Recommendation::class)]
    private $recommendations;

    #[ORM\OneToMany(mappedBy: 'profile', targetEntity: Skill::class)]
    private $skills;

    #[ORM\OneToMany(mappedBy: 'profile', targetEntity: Social::class)]
    private $socials;

    #[ORM\OneToMany(mappedBy: 'profile', targetEntity: Work::class)]
    private $works;

    public function __construct()
    {
        $this->experiences = new ArrayCollection();
        $this->formations = new ArrayCollection();
        $this->recommendations = new ArrayCollection();
        $this->skills = new ArrayCollection();
        $this->socials = new ArrayCollection();
        $this->works = new ArrayCollection();
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

    public function setWebsite(string $website): self
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

    /**
     * @return Collection|Experience[]
     */
    public function getExperiences(): Collection
    {
        return $this->experiences;
    }

    public function addExperience(Experience $experience): self
    {
        if (!$this->experiences->contains($experience)) {
            $this->experiences[] = $experience;
            $experience->setProfile($this);
        }

        return $this;
    }

    public function removeExperience(Experience $experience): self
    {
        if ($this->experiences->removeElement($experience)) {
            // set the owning side to null (unless already changed)
            if ($experience->getProfile() === $this) {
                $experience->setProfile(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Formation[]
     */
    public function getFormations(): Collection
    {
        return $this->formations;
    }

    public function addFormation(Formation $formation): self
    {
        if (!$this->formations->contains($formation)) {
            $this->formations[] = $formation;
            $formation->setProfile($this);
        }

        return $this;
    }

    public function removeFormation(Formation $formation): self
    {
        if ($this->formations->removeElement($formation)) {
            // set the owning side to null (unless already changed)
            if ($formation->getProfile() === $this) {
                $formation->setProfile(null);
            }
        }

        return $this;
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
        if ($this->recommendations->removeElement($recommendation)) {
            // set the owning side to null (unless already changed)
            if ($recommendation->getProfile() === $this) {
                $recommendation->setProfile(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Skill[]
     */
    public function getSkills(): Collection
    {
        return $this->skills;
    }

    public function addSkill(Skill $skill): self
    {
        if (!$this->skills->contains($skill)) {
            $this->skills[] = $skill;
            $skill->setProfile($this);
        }

        return $this;
    }

    public function removeSkill(Skill $skill): self
    {
        if ($this->skills->removeElement($skill)) {
            // set the owning side to null (unless already changed)
            if ($skill->getProfile() === $this) {
                $skill->setProfile(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Social[]
     */
    public function getSocials(): Collection
    {
        return $this->socials;
    }

    public function addSocial(Social $social): self
    {
        if (!$this->socials->contains($social)) {
            $this->socials[] = $social;
            $social->setProfile($this);
        }

        return $this;
    }

    public function removeSocial(Social $social): self
    {
        if ($this->socials->removeElement($social)) {
            // set the owning side to null (unless already changed)
            if ($social->getProfile() === $this) {
                $social->setProfile(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Work[]
     */
    public function getWorks(): Collection
    {
        return $this->works;
    }

    public function addWork(Work $work): self
    {
        if (!$this->works->contains($work)) {
            $this->works[] = $work;
            $work->setProfile($this);
        }

        return $this;
    }

    public function removeWork(Work $work): self
    {
        if ($this->works->removeElement($work)) {
            // set the owning side to null (unless already changed)
            if ($work->getProfile() === $this) {
                $work->setProfile(null);
            }
        }

        return $this;
    }

    // Custom functions

    public function getFullname(): ?string
    {
        return $this->firstname.' '.$this->lastname;
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
     * @return string
     */
    public function getFormattedMobile(): string
    {
        return implode('.', str_split($this->mobile, 2));
    }
}
