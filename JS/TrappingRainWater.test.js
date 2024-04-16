/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { trap } from './TrappingRainWater.js'

TEST('Starting TrappingRainWater test...', (t) => {
    //Test 1
    let want = 6
    let got = trap( [0,1,0,2,1,0,1,3,2,1,2,1] )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 9
    got = trap( [4,2,0,3,2,5] )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
