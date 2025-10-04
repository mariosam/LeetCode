/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { numWaterBottles } from './WaterBottles.js'

TEST('Starting WaterBottles test...', (t) => {
    //Test 1
    let want = 13
    let got = numWaterBottles( 9, 3 )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 19
    got = numWaterBottles( 15, 4 )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
