/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { countHillValley } from './CountHillsAndValleysInAnArray.js'

TEST('Starting CountHillsAndValleysInAnArray test...', (t) => {
    //Test 1
    let want = 3
    let got = countHillValley( [2,4,1,1,6,5] )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 0
    got = countHillValley( [6,6,5,5,4,1] )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
