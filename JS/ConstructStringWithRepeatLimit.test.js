/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { repeatLimitedString } from './ConstructStringWithRepeatLimit.js'

TEST('Starting ConstructStringWithRepeatLimit test...', (t) => {
    //Test 1
    let want = "zzcccac"
    let got = repeatLimitedString( "cczazcc", 3 )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = "bbabaa"
    got = repeatLimitedString( "aababab", 2 )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
