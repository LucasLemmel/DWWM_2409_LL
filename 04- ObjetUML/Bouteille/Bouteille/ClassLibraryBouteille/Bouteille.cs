using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace ClassLibraryBouteille
{
    public class Bouteille
    {
        //Attributs
        private float capaciteEnL;
        private float contenanceEnL;
        private bool ouverte;

        //Constructeur

        //Constructeur par defaut
        public Bouteille() 
        {
            this.capaciteEnL = 1;
            this.contenanceEnL = 1;
            this.ouverte = false;
        }

        //Constructeur classique
        public Bouteille(float capaciteEnL, float contenanceEnL,bool ouverte)
        {
            this.capaciteEnL=capaciteEnL;
            this.contenanceEnL=contenanceEnL;
            this.ouverte=ouverte;
        }

        //Constructeur hybride classique defaut
        public Bouteille(float capaciteEnL,float contenanceEnL) :this(capaciteEnL, contenanceEnL, false)
        {
        }

        //constructeur par clonage
        public Bouteille(Bouteille bouteilleACopier)
        {
            this.capaciteEnL = bouteilleACopier.capaciteEnL;
            this.contenanceEnL = bouteilleACopier.contenanceEnL;
            this.ouverte = bouteilleACopier.ouverte;
        }

        public bool Ouvrir()
        {
            if(!this.ouverte)
            {
                this.ouverte = true;
                return true;
            }
            else
            {
                return false;
            }
            
        }

        public bool Fermer()
        {
            if (this.ouverte)
            {
                this.ouverte = false;
                return true;
            }
            else
            {
                return false;
            }

        }

        public bool RemplirTout()
        {
            if (this.ouverte)
            {
                if(contenanceEnL < capaciteEnL)
                {
                    contenanceEnL = capaciteEnL;
                    return true;
                }
                else
                {
                    return false ;
                }
            }
            else
            {
                return false;
            }
        }

        public bool ViderTout()
        {
            if (this.ouverte)
            {
                if(contenanceEnL != 0f)
                {
                    contenanceEnL = 0f;
                    return true;
                }
                else
                {
                    return false;
                }
            }
            else
            {
                return false;
            }
        }

        public bool Remplir(float quantiteEnL)
        {
            if (this.ouverte)
            {

            }
        }
    }
}
