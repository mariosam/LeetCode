/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { maxTotalFruits } from './MaximumFruitsHarvestedAfterAtMostKSteps.js'

TEST('Starting MaximumFruitsHarvestedAfterAtMostKSteps test...', (t) => {
    //Test 1
    let want = 9
    let got = maxTotalFruits( [[2,8],[6,3],[8,6]], 5, 4 )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 14
    got = maxTotalFruits( [[0,9],[4,1],[5,7],[6,2],[7,4],[10,9]], 5, 4 )
    t.assert( want === got, "Expect: "+want)
    //Test 3
    want = 0
    got = maxTotalFruits( [[0,3],[6,4],[8,5]], 3, 2 )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
