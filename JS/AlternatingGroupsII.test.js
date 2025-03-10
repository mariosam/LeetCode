/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { numberOfAlternatingGroups } from './AlternatingGroupsII.js'

TEST('Starting AlternatingGroupsII test...', (t) => {
    //Test 1
    let want = 3
    let got = numberOfAlternatingGroups( [0,1,0,1,0], 3 )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 2
    got = numberOfAlternatingGroups( [0,1,0,0,1,0,1], 6 )
    t.assert( want === got, "Expect: "+want)
    //Test 3
    want = 0
    got = numberOfAlternatingGroups( [1,1,0,1], 4 )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
