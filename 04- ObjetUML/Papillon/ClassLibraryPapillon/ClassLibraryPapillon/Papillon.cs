﻿using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace ClassLibraryPapillon
{
    public class Papillon : StadeDEvolution
    {

        public Papillon()
        {

        }


        public override void SeDeplacer()
        {
            Console.WriteLine("Je vole");
        }


        public override StadeDEvolution SeMetamorphoser()
        {

            return this;
        }

    }
}
