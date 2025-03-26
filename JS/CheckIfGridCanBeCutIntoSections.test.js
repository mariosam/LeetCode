/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { checkValidCuts } from './CheckIfGridCanBeCutIntoSections.js'

TEST('Starting CheckIfGridCanBeCutIntoSections test...', (t) => {
    //Test 1
    let want = true
    let got = checkValidCuts( 5, [[1,0,5,2],[0,2,2,4],[3,2,5,3],[0,4,4,5]] )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = true
    got = checkValidCuts( 4, [[0,0,1,1],[2,0,3,4],[0,2,2,3],[3,0,4,3]] )
    t.assert( want === got, "Expect: "+want)
    //Test 3
    want = false
    got = checkValidCuts( 4, [[0,2,2,4],[1,0,3,2],[2,2,3,4],[3,0,4,2],[3,2,4,4]] )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
