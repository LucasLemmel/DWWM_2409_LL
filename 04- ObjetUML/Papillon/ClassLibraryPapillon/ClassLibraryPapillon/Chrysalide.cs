using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace ClassLibraryPapillon
{
    public class Chrysalide : StadeDEvolution
    {

        public Chrysalide()
        {

        }


        public override void SeDeplacer()
        {
            Console.WriteLine("Je peux pas");
        }


        public override StadeDEvolution SeMetamorphoser()
        {

            return new Papillon();
        }

    }
}
