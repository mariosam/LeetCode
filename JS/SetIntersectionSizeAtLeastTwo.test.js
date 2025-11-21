/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { intersectionSizeTwo } from './SetIntersectionSizeAtLeastTwo.js'

TEST('Starting SetIntersectionSizeAtLeastTwo test...', (t) => {
    //Test 1
    let want = 5
    let got = intersectionSizeTwo( [[1,3],[3,7],[8,9]] )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 3
    got = intersectionSizeTwo( [[1,3],[1,4],[2,5],[3,5]] )
    t.assert( want === got, "Expect: "+want)
    //Test 3
    want = 5
    got = intersectionSizeTwo( [[1,2],[2,3],[2,4],[4,5]] )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
