/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { countOdds } from './CountOddNumbersInAnIntervalRange.js'

TEST('Starting CountOddNumbersInAnIntervalRange test...', (t) => {
    //Test 1
    let want = 3
    let got = countOdds( 3, 7 )
    t.assert( want === got, "Expect: 3")
    //Test 2
    want = 1
    got = countOdds( 8, 10 )
    t.assert( want === got, "Expect: 1")
    //Test 3
    want = 86213013
    got = countOdds( 798273637, 970699661 )
    t.assert( want === got, "Expect: 86213013")

    t.end()
})
