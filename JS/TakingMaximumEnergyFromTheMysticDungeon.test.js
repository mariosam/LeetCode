/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { maximumEnergy } from './TakingMaximumEnergyFromTheMysticDungeon.js'

TEST('Starting TakingMaximumEnergyFromTheMysticDungeon test...', (t) => {
    //Test 1
    let want = 3
    let got = maximumEnergy( [5,2,-10,-5,1], 3 )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = -1
    got = maximumEnergy( [-2,-3,-1], 2 )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
